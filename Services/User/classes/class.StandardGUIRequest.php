<?php

/**
 * This file is part of ILIAS, a powerful learning management system
 * published by ILIAS open source e-Learning e.V.
 * ILIAS is licensed with the GPL-3.0,
 * see https://www.gnu.org/licenses/gpl-3.0.en.html
 * You should have received a copy of said license along with the
 * source code, too.
 * If this is not the case or you just want to try ILIAS, you'll find
 * us at:
 * https://www.ilias.de
 * https://github.com/ILIAS-eLearning
 */

namespace ILIAS\User;

use ILIAS\Repository\BaseGUIRequest;

class StandardGUIRequest
{
    use BaseGUIRequest;

    public function __construct(
        \ILIAS\HTTP\Services $http,
        \ILIAS\Refinery\Factory $refinery,
        ?array $passed_query_params = null,
        ?array $passed_post_data = null
    ) {
        $this->initRequest(
            $http,
            $refinery,
            $passed_query_params,
            $passed_post_data
        );
    }

    public function getRefId() : int
    {
        return $this->int("ref_id");
    }

    public function getLetter() : string
    {
        return $this->str("letter");
    }

    public function getBaseClass() : string
    {
        return $this->str("baseClass");
    }

    public function getSearch() : string
    {
        return $this->str("search");
    }

    public function getJumpToUser() : int
    {
        return $this->int("jmpToUser");
    }

    public function getFieldId() : int
    {
        return $this->int("field_id");
    }

    public function getFetchAll() : bool
    {
        return (bool) $this->int("fetchall");
    }

    public function getTerm() : string
    {
        return $this->str("term");
    }

    public function getStartingPointId() : int
    {
        $id = $this->int("spid");
        if ($id == 0) {
            $id = $this->int("start_point_id");
        }
        return $id;
    }

    public function getRoleId() : int
    {
        $role_id = $this->int("rolid");
        if ($role_id == 0) {
            $role_id = $this->int("role_id");
        }
        return $role_id;
    }

    public function getActionActive() : array
    {
        return $this->intArray("active");
    }

    public function getIds() : array
    {
        return $this->intArray("id");
    }

    public function getChecked() : array
    {
        return $this->intArray("chb");
    }

    public function getFieldType() : int
    {
        return $this->int("field_type");
    }

    public function getFields() : array
    {
        return $this->intArray("fields");
    }

    public function getSelectedAction() : string
    {
        return $this->str("selectedAction");
    }

    public function getFrSearch() : bool
    {
        return $this->int("frsrch");
    }

    public function getSelect() : array
    {
        return $this->strArray("select");
    }

    public function getFiles() : array
    {
        return $this->strArray("file");
    }

    public function getExportType() : string
    {
        return $this->str("export_type");
    }

    public function getMailSalutation($gender, $lang) : string
    {
        return $this->str("sal_" . $gender . "_" . $lang);
    }

    public function getMailSubject($lang) : string
    {
        return $this->str("subject_" . $lang);
    }

    public function getMailBody($lang) : string
    {
        return $this->str("body_" . $lang);
    }

    public function getMailAttDelete($lang) : bool
    {
        return (bool) $this->int("att_" . $lang . "_delete");
    }

    public function getSelectAll() : bool
    {
        return (bool) $this->int("select_cmd_all");
    }

    public function getRoleIds() : array
    {
        return $this->intArray("role_id");
    }

    public function getPostedRoleIds() : array
    {
        return $this->intArray("role_id_ctrl");
    }

    public function getFilteredRoles() : int
    {
        return $this->int("filter");
    }

    public function getSendMail() : string
    {
        return $this->str("send_mail");
    }

    public function getPassword() : string
    {
        return $this->str("passwd");
    }

    public function getUDFs() : array
    {
        return $this->strArray("udf");
    }

    public function getPositions() : array
    {
        return $this->intArray("position");
    }

    public function getCurrentPassword() : string
    {
        return $this->str("current_password");
    }

    public function getNewPassword() : string
    {
        return $this->str("new_password");
    }
}
