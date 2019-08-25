<?php
class database{
    private $host=DB_HOST;
    private $dbuser=DB_USER;
    private $dbname=DB_NAME;
    private $dbpass=DB_PASS;
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dbc="mysql:host=".$this->host.";dbname=".$this->dbname;
        $options=[
            PDO::ATTR_PERSISTENT=>true,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ];
        try{
            $this->dbh=new PDO($dbc,$this->dbuser,$this->dbpass,$options);
        }
        catch (PDOException $e){
            exit($e->getMessage());
        }
    }
    public function query($qry){
        $this->stmt=$this->dbh->prepare($qry);
    }
    public function bind($param,$value,$type=''){
        if(empty($type)){
            switch ($value){
                case is_int($value):
                    $type=PDO::PARAM_INT;
                    break;
                case is_string($value):
                    $type=PDO::PARAM_STR;
                    break;
                case is_bool($value):
                    $type=PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type=PDO::PARAM_NULL;
            }
        }
        $this->stmt->bindValue($param,$value,$type);
    }
    public function execute(){
        return $this->stmt->execute();
    }
    public function multipleset(){
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function singleset(){
        $this->stmt->execute();
        return $this->stmt->fetchObject();
    }
    public function rowCount(){
        $this->stmt->execute();
        return $this->stmt->rowCount();
    }
    public function lastInsertId(){
        $this->stmt->execute();
        return $this->stmt->lastInsertId();
    }

}
