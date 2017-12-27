<?php

class VetementDB {
 private $_db;
    private $_infoArray = array();
    private $_variable="valeur";

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function updateHaut($champ,$nouveau,$id){                
        try {
            $query="UPDATE haut set ".$champ." = '".$nouveau."' where id_haut ='".$id."'";            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();            
            
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
}
