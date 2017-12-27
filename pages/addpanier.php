<?php
require'_header.php';



if(isset($_GET['id'])){
 

   //$p=Connexion::query('SELECT id_haut FROM haut WHERE id_haut=:id', array('id'=>$_GET['id']));
$p=$_GET['id'];
  var_dump($p);
    if (empty($p)){
        print("ce produit n'existe pas");
    }
    
  $panier->add($p[0]->id);
  print"le produit a bien été ajouté au panier ";
}

else
{
    print "vous n'avez pas sélectionner de produit à ajouter au panier";
}
//var_dump($_GET);
