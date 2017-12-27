<?php

class Vue_hautDB {
       private $_db;
    function __construct($_db) {
        $this->_db = $_db;
    }
    
    //liste des gâteaux correspondant au choix du type dans liste déroulante
    function getVue_hautType($id){
         try {            
            $query = "SELECT * FROM vue_haut where ID_TYPE_HAUT=:id_type_haut";
            $resultset = $this->_db->prepare($query);  
            $resultset->bindValue(':id_type_haut',$id);
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    

    function getVue_haut(){
         try {
            $query = "SELECT * FROM vue_haut order by type_haut,nom_haut";
            $resultset = $this->_db->prepare($query);  
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    
    function getVue_hautProduit($id){
         try {            
            $query = "SELECT * FROM vue_haut where ID_HAUT=:id_haut";
            $resultset = $this->_db->prepare($query);  
            $resultset->bindValue(':id_haut',$id);
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
}
