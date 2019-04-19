<?php
class DataSet{
    protected $_dbConnection, $_dbInstance;
    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbConnection = $this->_dbInstance->getdbConnection();
    }

    public function fetchAllInterior(){
        $sqlQuery = "SELECT * FROM interior";
        $statement = $this->_dbConnection->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];
        while($row = $statement->fetch()){
            $dataSet[] = new InteriorData($row);
        }
        return $dataSet;
    }
}