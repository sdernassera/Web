<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HautDB
 *
 * @author nasserasder
 */
class HautDB extends Haut{
  private $_db;
    private $_typeArray = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function getHaut() {
        try {
            $query = "SELECT * FROM HAUT ";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $data = $resultset->fetchAll();

            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_typeArray[] = new haut($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;
    }
    
     public function query($sql,$data=array()){
        $req=$this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchALL(PDO::FETCH_OBJ);
    }
}
