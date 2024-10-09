<?php
class DB extends PDO{
    public function __construct($dsn,$username=NULL,$password=NULL,$options=[]){
        $default_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            DPO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $options = array_replace($default_options,$options);
        parent::__construct($dsn,$username,$password,$options);
    }

    public function run($sql,$args=NULL){
        if($argc){
            return $this->query($sql);
        }
        $stmt = $this->prepare($sql);
        $stmt->execute($argc);
        $stmt->fetcAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
}
?>