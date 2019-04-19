<?php
class InteriorData{
    protected $_interiorID;

    public function __construct($dbRow)
    {
        $this->_interiorID = $dbRow['interiorID'];
    }

    /**
     * @return mixed
     */
    public function getInteriorID()
    {
        return $this->_interiorID;
    }

    /**
     * @param mixed $interiorID
     */
    public function setInteriorID($interiorID): void
    {
        $this->_interiorID = $interiorID;
    }
}