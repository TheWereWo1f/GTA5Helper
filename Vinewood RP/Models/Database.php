<?php
class Database{
    protected static $_dbInstance = null;
    protected $db_Handle;

    public static function getInstance(){
        $username = 'gta';
        $password = 'vXayuPY5M2';
        $host = 's1.hostiman.ru';
        $dbName = 'gta5rp';

        if(self::$_dbInstance === null){
            self::$_dbInstance = new self($username, $password, $host, $dbName);
        }

        return self::$_dbInstance;
    }

    private function __construct($username, $password, $host, $database)
    {
        try{
            $this->db_Handle = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getdbConnection(){
        return $this->db_Handle;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->db_Handle = null;
    }
}