<?php
header('Location:http://localhost:8888/ProjetWeb/pages/votre_panier.php');
//session_start();
print_r($_POST);
require_once 'panier.class.php';
$panier = new Panier('produits');



if (isset($_POST['id'])) {
    //on vient de la page produit
    $_SESSION['id_pannier'] = $_POST['id'];
}
if (isset($_SESSION['id_pannier'])) {
    $cake = new Vue_hautDB($cnx);
    $liste = $cake->getVue_hautProduit($_SESSION['id_pannier']);
}
$valeurs = array(
    'nom_haut' => $liste[0]['nom_haut'],
    'prix_unitaire' => $liste[0]['prix_unitaire'],
    'qte' => $_POST['qte'],
    'id_haut' => $liste[0]['id_haut'],
);
$panier->set($_POST['id'], $valeurs);

?>

