<?php

class Type_hautDB extends Type_haut{
   

    private $_db;
    private $_typeArray = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function getType_haut() {
        try {
            $query = "SELECT * FROM TYPE_HAUT ORDER BY TYPE_HAUT";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $data = $resultset->fetchAll();

            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_typeArray[] = new Type_haut($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;
    }
}
