<?php

require_once "Services/ADT/classes/Bridges/class.ilADTPresentationBridge.php";

class ilADTDatePresentationBridge extends ilADTPresentationBridge
{
    protected function isValidADT(ilADT $a_adt) : bool
    {
        return ($a_adt instanceof ilADTDate);
    }
    
    public function getHTML() : string
    {
        if (!$this->getADT()->isNull()) {
            // :TODO: relative dates?
            
            return $this->decorate(ilDatePresentation::formatDate($this->getADT()->getDate()));
        }
    }
    
    public function getSortable() : mixed
    {
        if (!$this->getADT()->isNull()) {
            return (int) $this->getADT()->getDate()->get(IL_CAL_UNIX);
        }
    }
}
