<?php
class Panier {

    public function __construct() {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }
    }

    public function add($p_id) {
        $_SESSION['panier'][$p_id] = 1;
    }

}
