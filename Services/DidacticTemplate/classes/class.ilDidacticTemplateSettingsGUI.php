<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once './Services/DidacticTemplate/classes/class.ilDidacticTemplateSetting.php';

/**
 * Settings for a single didactic template
 *
 * @author Stefan Meyer <meyer@leifos.com>
 * @ingroup ServicesDidacticTemplate
 * @ilCtrl_IsCalledBy ilDidacticTemplateSettingsGUI: ilObjRoleFolderGUI
 * @ilCtrl_Calls ilDidacticTemplateSettingsGUI: ilMultilingualismGUI, ilPropertyFormGUI
 */
class ilDidacticTemplateSettingsGUI
{
    private $parent_object;

    /**
     * @var null|ilDidacticTemplateSetting
     */
    private $object = null;

    private $lng;

    /**
     * Constructor
     */
    public function __construct($a_parent_obj)
    {
        global $DIC;

        $lng = $DIC['lng'];
        
        $this->parent_object = $a_parent_obj;
        $this->lng = $lng;

        if (isset($_REQUEST["tplid"])) {
            $this->initObject($_REQUEST["tplid"]);
        }
    }

    /**
     * @param int $a_id
     * @return ilDidacticTemplateSetting
     */
    protected function initObject($a_id)
    {
        return $this->object = new ilDidacticTemplateSetting($a_id);
    }

    /**
     * Execute command
     * @return <type>
     */
    public function executeCommand()
    {
        /**
         * @var ilAccessHandler $ilAccess
         */
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];
        $ilAccess = $DIC['ilAccess'];
        
        $next_class = $ilCtrl->getNextClass($this);
        $cmd = $ilCtrl->getCmd();

        switch ($next_class) {
            case "ilpropertyformgui":
                $settings = new ilDidacticTemplateSetting((int) $_REQUEST['tplid']);
                $form = $this->initEditTemplate($settings);
                $ilCtrl->forwardCommand($form);
                // no break
            case 'ilmultilingualismgui':
                if (!$ilAccess->checkAccess('write', '', $_REQUEST["ref_id"]) ||
                    !isset($this->object) ||
                    $this->object->isAutoGenerated()) {
                    $ilCtrl->redirect($this, "overview");
                }
                //$this->tabs_gui->setTabActive('export');
                $this->setEditTabs("settings_trans");
                include_once("./Services/Multilingualism/classes/class.ilMultilingualismGUI.php");
                $transgui = new ilMultilingualismGUI($_REQUEST["tplid"], 'dtpl');
                $defaultl = $this->object->getTranslationObject()->getDefaultLanguage();

                $transgui->setStartValues(
                    $this->object->getPresentationTitle($defaultl),
                    $this->object->getPresentationDescription($defaultl)
                );

                $ilCtrl->forwardCommand($transgui);
                break;
            default:
                if (!$cmd) {
                    $cmd = 'overview';
                }
                $this->$cmd();

                break;
        }
        return true;
    }

    /**
     * Show didactic template administration
     *
     * @global ilToolbarGUI $ilToolbar
     */
    protected function overview()
    {
        global $DIC;

        $ilToolbar = $DIC['ilToolbar'];
        $lng = $DIC['lng'];
        $ilCtrl = $DIC['ilCtrl'];
        $ilAccess = $DIC['ilAccess'];

        if ($ilAccess->checkAccess('write', '', $_REQUEST["ref_id"])) {
            $ilToolbar->addButton(
                $lng->txt('didactic_import_btn'),
                $ilCtrl->getLinkTarget($this, 'showImportForm')
            );
        }


        include_once './Services/DidacticTemplate/classes/class.ilDidacticTemplateSettingsTableGUI.php';
        $table = new ilDidacticTemplateSettingsTableGUI($this, 'overview');
        $table->init();
        $table->parse();

        $GLOBALS['DIC']['tpl']->setContent($table->getHTML());
    }

    /**
     * Show template import form
     *
     * @global ilTabsGUI $ilTabs
     */
    protected function showImportForm(ilPropertyFormGUI $form = null)
    {
        global $DIC;

        $ilTabs = $DIC['ilTabs'];
        $ilCtrl = $DIC['ilCtrl'];
        
        if (isset($_REQUEST["tplid"])) {
            $this->setEditTabs('import');
        } else {
            $ilTabs->clearTargets();
            $ilTabs->setBackTarget(
                $this->lng->txt('didactic_back_to_overview'),
                $ilCtrl->getLinkTarget($this, 'overview')
            );
        }

        if (!$form instanceof ilPropertyFormGUI) {
            $form = $this->createImportForm();
        }
        $GLOBALS['DIC']['tpl']->setContent($form->getHTML());
    }

    /**
     * Create template import form
     * @return ilPropertyFormGUI $form
     */
    protected function createImportForm()
    {
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];

        include_once './Services/Form/classes/class.ilPropertyFormGUI.php';
        $form = new ilPropertyFormGUI();
        $form->setShowTopButtons(false);
        $form->setFormAction($ilCtrl->getFormAction($this));
        $form->setTitle($this->lng->txt('didactic_import_table_title'));
        $form->addCommandButton('importTemplate', $this->lng->txt('import'));
        $form->addCommandButton('overview', $this->lng->txt('cancel'));

        $file = new ilFileInputGUI($this->lng->txt('import_file'), 'file');
        $file->setSuffixes(array('xml'));
        $file->setRequired(true);
        $form->addItem($file);

        $created = true;

        return $form;
    }

    /**
     * Import template
     */
    protected function importTemplate()
    {
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];
        $ilAccess = $DIC['ilAccess'];

        if (!$ilAccess->checkAccess('write', '', $_REQUEST["ref_id"])) {
            $ilCtrl->redirect($this, "overview");
        }

        $edit = isset($_REQUEST['tplid']);

        if ($edit) {
            $form = $this->createImportForm();
        } else {
            $form = $this->editImportForm();
        }


        if (!$form->checkInput()) {
            ilUtil::sendFailure($this->lng->txt('err_check_input'));
            $form->setValuesByPost();

            if ($edit) {
                $this->showEditImportForm();
            } else {
                $this->showImportForm($form);
            }
        }

        // Do import
        include_once './Services/DidacticTemplate/classes/class.ilDidacticTemplateImport.php';
        
        $import = new ilDidacticTemplateImport(ilDidacticTemplateImport::IMPORT_FILE);

        $file = $form->getInput('file');
        $tmp = ilUtil::ilTempnam() . '.xml';

        // move uploaded file
        ilUtil::moveUploadedFile(
            $file['tmp_name'],
            $file['name'],
            $tmp
        );
        $import->setInputFile($tmp);

        try {
            $settings = $import->import();

            if ($edit) {
                $this->editImport($settings);
            }
        } catch (ilDidacticTemplateImportException $e) {
            ilLoggerFactory::getLogger('otpl')->error('Import failed with message: ' . $e->getMessage());
            ilUtil::sendFailure($this->lng->txt('didactic_import_failed') . ': ' . $e->getMessage());
        }

        ilUtil::sendSuccess($this->lng->txt('didactic_import_success'), true);

        if ($edit) {
            $ilCtrl->redirect($this, 'editTemplate');
        } else {
            $ilCtrl->redirect($this, 'overview');
        }
    }

    /**
     * Edit template
     * @return void
     */
    protected function editTemplate(ilPropertyFormGUI $form = null)
    {
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];
        $ilTabs = $DIC['ilTabs'];

        $this->setEditTabs("edit");

        if (!$_REQUEST['tplid']) {
            ilUtil::sendFailure($this->lng->txt('select_one'), true);
            $ilCtrl->redirect($this, 'overview');
        }

        //$ilTabs->clearTargets();
        //$ilTabs->setBackTarget(
        //	$this->lng->txt('didactic_back_to_overview'),
        //	$ilCtrl->getLinkTarget($this,'overview')
        //);


        $ilCtrl->saveParameter($this, 'tplid');

        if (!$form instanceof ilPropertyFormGUI) {
            $form = $this->initEditTemplate($this->object);
        }
        $GLOBALS['DIC']['tpl']->setContent($form->getHTML());
    }

    /**
     * Update template
     */
    protected function updateTemplate()
    {
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];
        $ilAccess = $DIC['ilAccess'];

        if (!$ilAccess->checkAccess('write', '', $_REQUEST["ref_id"])) {
            $this->ctrl->redirect($this, "overview");
        }

        $temp = new ilDidacticTemplateSetting((int) $_REQUEST['tplid']);
        $form = $this->initEditTemplate($temp);

        if ($form->checkInput()) {
            //change default entrys if translation is active
            if (count($lang = $temp->getTranslationObject()->getLanguages())) {
                $temp->getTranslationObject()->setDefaultTitle($form->getInput('title'));
                $temp->getTranslationObject()->setDefaultDescription($form->getInput('description'));
                $temp->getTranslationObject()->save();
            }

            if (!$temp->isAutoGenerated()) {
                $temp->setTitle($form->getInput('title'));
                $temp->setDescription($form->getInput('description'));
            }

            $temp->setInfo($form->getInput('info'));
            $temp->enable($form->getInput('enable'));

            if (!$temp->isAutoGenerated()) {
                $temp->setAssignments(array($form->getInput('type')));
            }

            if ($form->getInput('local_template') && count($form->getInput('effective_from')) > 0) {
                $temp->setEffectiveFrom($form->getInput('effective_from'));
            } else {
                $temp->setEffectiveFrom(array());
            }

            $temp->setExclusive((bool) $form->getInput('exclusive_template'));

            $temp->update();
            
            ilUtil::sendSuccess($this->lng->txt('settings_saved'), true);
            $ilCtrl->redirect($this, 'overview');
        }

        ilUtil::sendFailure($this->lng->txt('err_check_input'));
        $form->setValuesByPost();
        $this->editTemplate($form);
    }

    /**
     * Init edit template form
     *
     * @param ilDidacticTemplateSetting $set
     * @return ilPropertyFormGUI
     */
    protected function initEditTemplate(ilDidacticTemplateSetting $set)
    {
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];
        $objDefinition = $DIC['objDefinition'];

        include_once './Services/Form/classes/class.ilPropertyFormGUI.php';
        $form = new ilPropertyFormGUI();
        $form->setShowTopButtons(false);
        $form->setFormAction($ilCtrl->getFormAction($this, 'updateTemplate'));
        $form->setTitle($this->lng->txt('didactic_edit_tpl'));
        $form->addCommandButton('updateTemplate', $this->lng->txt('save'));
        $form->addCommandButton('overview', $this->lng->txt('cancel'));

        // title
        $title = new ilTextInputGUI($this->lng->txt('title'), 'title');
        $title->setSize(40);
        $title->setMaxLength(64);
        $title->setRequired(true);
        //use presentation title if autogenerated is set
        $title->setDisabled($set->isAutoGenerated());

        if (!$set->isAutoGenerated()) {
            $trans = $set->getTranslations();
            $def = $trans[0]; // default

            if (sizeof($trans) > 1) {
                include_once('Services/MetaData/classes/class.ilMDLanguageItem.php');
                $languages = ilMDLanguageItem::_getLanguages();
                $title->setInfo($this->lng->txt("language") . ": " . $languages[$def["lang_code"]] .
                    ' <a href="' . $ilCtrl->getLinkTargetByClass("ilmultilingualismgui", "listTranslations") .
                    '">&raquo; ' . $this->lng->txt("more_translations") . '</a>');
            }
        }

        if ($set->isAutoGenerated()) {
            $title->setValue($set->getPresentationTitle());
        } else {
            $title->setValue($def["title"]);
        }

        $form->addItem($title);

        // desc
        $desc = new ilTextAreaInputGUI($this->lng->txt('description'), 'description');
        //use presentation title if autogenerated is set
        if ($set->isAutoGenerated()) {
            $desc->setValue($set->getPresentationDescription());
        } else {
            $desc->setValue($def["description"]);
        }
        $desc->setRows(3);
        $desc->setDisabled($set->isAutoGenerated());
        $form->addItem($desc);

        // info
        $info = new ilTextAreaInputGUI($this->lng->txt('didactic_install_info'), 'info');
        $info->setValue($set->getInfo());
        $info->setRows(6);
        $form->addItem($info);

        //activate
        $enable = new ilCheckboxInputGUI($this->lng->txt('active'), 'enable');
        $enable->setChecked($set->isEnabled());
        $enable->setRequired(true);
        $form->addItem($enable);

        // object type
        if (!$set->isAutoGenerated()) {
            $type = new ilSelectInputGUI($this->lng->txt('obj_type'), 'type');
            $type->setRequired(true);
            $type->setInfo($this->lng->txt('dtpl_obj_type_info'));
            $assigned = $set->getAssignments();
            $type->setValue(isset($assigned[0]) ? $assigned[0] : '');
            $subs = $objDefinition->getSubObjectsRecursively('root', false);
            $options = array();
            foreach (array_merge($subs, array('fold' => 1)) as $obj => $null) {
                ilLoggerFactory::getLogger('root')->dump($null);
                if ($objDefinition->isPlugin($obj)) {
                    $options[$obj] = ilObjectPlugin::lookupTxtById($obj, "obj_" . $obj);
                } elseif ($objDefinition->isAllowedInRepository($obj)) {
                    $options[$obj] = $this->lng->txt('obj_' . $obj);
                }
            }
            asort($options);

            $type->setOptions($options);
            $form->addItem($type);

            $lokal_templates = new ilCheckboxInputGUI($this->lng->txt("activate_local_didactic_template"), "local_template");
            $lokal_templates->setChecked(count($set->getEffectiveFrom()) > 0);
            $lokal_templates->setInfo($this->lng->txt("activate_local_didactic_template_info"));

            //effective from (multinode)
            include_once("./Services/Form/classes/class.ilRepositorySelector2InputGUI.php");
            $effrom = new ilRepositorySelector2InputGUI($this->lng->txt("effective_form"), "effective_from", true);
            //$effrom->setMulti(true);
            $definition = $GLOBALS['DIC']['objDefinition'];
            $white_list = [];
            foreach ($definition->getAllRepositoryTypes() as $type) {
                if ($definition->isContainer($type)) {
                    $white_list[] = $type;
                }
            }
            $effrom->getExplorerGUI()->setTypeWhiteList($white_list);
            $effrom->setValue($set->getEffectiveFrom());

            $lokal_templates->addSubItem($effrom);
            $form->addItem($lokal_templates);

            $excl =  new ilCheckboxInputGUI($this->lng->txt("activate_exclusive_template"), "exclusive_template");
            $excl->setInfo($this->lng->txt("activate_exclusive_template_info"));
            $excl->setChecked($set->isExclusive());

            $form->addItem($excl);
        }



        return $form;
    }

    /**
     * Copy on template
     */
    protected function copyTemplate()
    {
        global $DIC;

        $ilErr = $DIC['ilErr'];
        $ilCtrl = $DIC['ilCtrl'];
        $ilAccess = $DIC['ilAccess'];

        if (!$ilAccess->checkAccess('write', '', $_REQUEST["ref_id"])) {
            $this->ctrl->redirect($this, "overview");
        }

        if (!$_REQUEST['tplid']) {
            ilUtil::sendFailure($this->lng->txt('select_one'));
            return $ilCtrl->redirect($this, 'overview');
        }

        include_once './Services/DidacticTemplate/classes/class.ilDidacticTemplateCopier.php';

        $copier = new ilDidacticTemplateCopier((int) $_REQUEST['tplid']);
        $copier->start();

        ilUtil::sendSuccess($this->lng->txt('didactic_copy_suc_message'), true);
        $ilCtrl->redirect($this, 'overview');
    }

    /**
     * Export one template
     */
    protected function exportTemplate()
    {
        global $DIC;

        $ilErr = $DIC['ilErr'];
        $ilCtrl = $DIC['ilCtrl'];

        if (!$_REQUEST['tplid']) {
            ilUtil::sendFailure($this->lng->txt('select_one'));
            return $ilCtrl->redirect($this, 'overview');
        }

        include_once './Services/DidacticTemplate/classes/class.ilDidacticTemplateXmlWriter.php';
        $writer = new ilDidacticTemplateXmlWriter((int) $_REQUEST['tplid']);
        $writer->write();

        ilUtil::deliverData(
            $writer->xmlDumpMem(true),
            $writer->getSetting()->getTitle() . '.xml',
            'application/xml'
        );
    }

    /**
     * Show delete confirmation screen
     *
     * @global ilCtrl $ilCtrl
     */
    protected function confirmDelete()
    {
        /**
         * @var ilCtrl $ilCtrl
         */
        global $DIC;

        $ilErr = $DIC['ilErr'];
        $ilCtrl = $DIC['ilCtrl'];

        if (!$_REQUEST['tpls']) {
            ilUtil::sendFailure($this->lng->txt('select_one'));
            return $ilCtrl->redirect($this, 'overview');
        }

        include_once './Services/Utilities/classes/class.ilConfirmationGUI.php';

        $confirm = new ilConfirmationGUI();
        $confirm->setFormAction($ilCtrl->getFormAction($this));
        $confirm->setConfirm($this->lng->txt('delete'), 'deleteTemplates');
        $confirm->setCancel($this->lng->txt('cancel'), 'overview');

        $forbidden = array();

        foreach ((array) $_REQUEST['tpls'] as $tplid) {
            $tpl = new ilDidacticTemplateSetting($tplid);

            if (!$tpl->isAutoGenerated()) {
                $confirm->addItem('tpls[]', $tpl->getId(), $tpl->getPresentationTitle());
            } else {
                $forbidden[] = $tpl->getId();
            }
        }

        if (count($forbidden) > 0 && count($_REQUEST['tpls']) == 1) {
            ilUtil::sendFailure($this->lng->txt('didactic_cannot_delete_auto_generated'), true);
            $ilCtrl->redirect($this, "overview");
        } elseif (count($forbidden) > 0 && count($_REQUEST['tpls']) > 1) {
            ilUtil::sendInfo($this->lng->txt('didactic_cannot_delete_auto_generated_confirmation'));
        }

        ilUtil::sendQuestion($this->lng->txt('didactic_confirm_delete_msg'));
        $GLOBALS['DIC']['tpl']->setContent($confirm->getHTML());
    }

    /**
     * Delete chosen didactic templates
     * @global ilErrorHandling $ilErr
     * @global ilCtrl $ilCtrl
     * @return void
     */
    protected function deleteTemplates()
    {
        global $DIC;

        $ilErr = $DIC['ilErr'];
        $ilCtrl = $DIC['ilCtrl'];
        $ilAccess = $DIC['ilAccess'];

        if (!$ilAccess->checkAccess('write', '', $_REQUEST["ref_id"])) {
            $this->ctrl->redirect($this, "overview");
        }

        if (!$_REQUEST['tpls']) {
            ilUtil::sendFailure($this->lng->txt('select_one'));
            return $ilCtrl->redirect($this, 'overview');
        }

        foreach ((array) $_REQUEST['tpls'] as $tplid) {
            $tpl = new ilDidacticTemplateSetting($tplid);
            $tpl->delete();
        }

        ilUtil::sendSuccess($this->lng->txt('didactic_delete_msg'), true);
        $ilCtrl->redirect($this, 'overview');
    }

    /**
     * Activate didactic templates
     * @global ilErrorHandling $ilErr
     * @global ilCtrl $ilCtrl
     * @return void
     */
    protected function activateTemplates()
    {
        global $DIC;

        $ilErr = $DIC['ilErr'];
        $ilCtrl = $DIC['ilCtrl'];
        $ilAccess = $DIC['ilAccess'];

        if (!$ilAccess->checkAccess('write', '', $_REQUEST["ref_id"])) {
            $this->ctrl->redirect($this, "overview");
        }
        if (!$_REQUEST['tpls']) {
            ilUtil::sendFailure($this->lng->txt('select_one'));
            return $ilCtrl->redirect($this, 'overview');
        }

        foreach ($_REQUEST['tpls'] as $tplid) {
            $tpl = new ilDidacticTemplateSetting($tplid);
            $tpl->enable(true);
            $tpl->update();
        }

        ilUtil::sendSuccess($this->lng->txt('didactic_activated_msg'), true);
        $ilCtrl->redirect($this, 'overview');
    }

    /**
     * Activate didactic templates
     * @global ilErrorHandling $ilErr
     * @global ilCtrl $ilCtrl
     * @return void
     */
    protected function deactivateTemplates()
    {
        global $DIC;

        $ilErr = $DIC['ilErr'];
        $ilCtrl = $DIC['ilCtrl'];
        $ilAccess = $DIC['ilAccess'];

        if (!$ilAccess->checkAccess('write', '', $_REQUEST["ref_id"])) {
            $this->ctrl->redirect($this, "overview");
        }

        if (!$_REQUEST['tpls']) {
            ilUtil::sendFailure($this->lng->txt('select_one'));
            $ilCtrl->redirect($this, 'overview');
        }

        foreach ($_REQUEST['tpls'] as $tplid) {
            $tpl = new ilDidacticTemplateSetting($tplid);
            $tpl->enable(false);
            $tpl->update();
        }

        ilUtil::sendSuccess($this->lng->txt('didactic_deactivated_msg'), true);
        $ilCtrl->redirect($this, 'overview');
    }

    /**
     * @param string $a_tab_active
     */
    protected function setEditTabs($a_tab_active = "edit")
    {
        /**
         * @var ilTabsGUI $ilTabs
         * @var ilCtrl $ilCtrl
         */
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];
        $ilTabs = $DIC['ilTabs'];


        $ilTabs->clearTargets();
        $ilTabs->setBackTarget(
            $this->lng->txt('didactic_back_to_overview'),
            $ilCtrl->getLinkTarget($this, 'overview')
        );
        $ilCtrl->saveParameter($this, "tplid");

        if (!$this->object->isAutoGenerated()) {
            $ilTabs->addTab('edit', $this->lng->txt('settings'), $ilCtrl->getLinkTarget($this, 'editTemplate'));
            $ilTabs->addTab('import', $this->lng->txt('import'), $ilCtrl->getLinkTarget($this, 'showEditImportForm'));

            if (in_array($a_tab_active, array('edit', 'settings_trans'))) {
                $ilTabs->addSubTab('edit', $this->lng->txt('settings'), $ilCtrl->getLinkTarget($this, 'editTemplate'));
                $ilTabs->addSubTab('settings_trans', $this->lng->txt("obj_multilinguality"), $ilCtrl->getLinkTargetByClass(array( "ilmultilingualismgui"), 'listTranslations'));
                $ilTabs->setTabActive('edit');
                $ilTabs->setSubTabActive($a_tab_active);
            } else {
                $ilTabs->setTabActive($a_tab_active);
            }
        }
    }

    public function showEditImportForm()
    {
        $this->setEditTabs("import");

        $form = $this->editImportForm();
        
        $GLOBALS['DIC']['tpl']->setContent($form->getHTML());
    }

    public function editImportForm()
    {
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];

        include_once './Services/Form/classes/class.ilPropertyFormGUI.php';
        $form = new ilPropertyFormGUI();
        $form->setShowTopButtons(false);
        $form->setFormAction($ilCtrl->getFormAction($this));
        $form->setTitle($this->lng->txt('didactic_import_table_title'));
        $form->addCommandButton('importTemplate', $this->lng->txt('import'));
        $form->addCommandButton('overview', $this->lng->txt('cancel'));

        $file = new ilFileInputGUI($this->lng->txt('didactic_template_update_import'), 'file');
        $file->setSuffixes(array('xml'));
        $file->setInfo($this->lng->txt('didactic_template_update_import_info'));
        $form->addItem($file);

        return $form;
    }

    /**
     * @global ilCtrl $ilCtrl
     * @param ilDidacticTemplateSetting $a_settings
     */
    public function editImport($a_settings)
    {
        global $DIC;

        $ilCtrl = $DIC['ilCtrl'];
        $tplid = $_REQUEST['tplid'];

        include_once './Services/DidacticTemplate/classes/class.ilDidacticTemplateObjSettings.php';
        ilDidacticTemplateObjSettings::transferAutoGenerateStatus($tplid, $a_settings->getId());

        $assignments = ilDidacticTemplateObjSettings::getAssignmentsByTemplateID($tplid);

        $this->object->delete();

        foreach ($assignments as $obj) {
            ilDidacticTemplateObjSettings::assignTemplate($obj["ref_id"], $obj["obj_id"], $a_settings->getId());
        }

        $ilCtrl->setParameter($this, "tplid", $a_settings->getId());
    }
}
