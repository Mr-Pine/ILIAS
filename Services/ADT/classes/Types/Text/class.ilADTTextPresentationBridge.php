<?php

class ilADTTextPresentationBridge extends ilADTPresentationBridge
{
    protected function isValidADT(ilADT $a_adt) : bool
    {
        return ($a_adt instanceof ilADTText);
    }
    
    public function getHTML() : string
    {
        if (!$this->getADT()->isNull()) {
            return $this->decorate(nl2br($this->getADT()->getText()));
        }
    }
    
    public function getSortable() : mixed
    {
        if (!$this->getADT()->isNull()) {
            return strtolower($this->getADT()->getText());
        }
    }
}
