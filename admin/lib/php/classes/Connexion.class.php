<?php


class Connexion {
    private static $_instance=null;
    private $Connexion;
 
    private $_db;
    function __construct($_db) {
        $this->_db = $_db;
    }


    public static function getInstance($dsn,$user,$pass){
        if(!self::$_instance){
            try{
                self::$_instance= new PDO($dsn,$user,$pass);
                self::$_instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               print "connexion ok";
            } catch (PDOException $e) {
                    print"Echec de connexion".$e->getMessage();
            }
        }
        return self::$_instance;
        
    }
    public static function query($sql,$data = array()){
       
        $req=$this->_db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
        
    }
    
   
}
