<?php
$types = new Type_hautDB($cnx);
$tabTypes = $types->getType_haut();
//var_dump($tabTypes);
$nbrTypes = count($tabTypes);
//traitement du formulaire
$cake2 = new Vue_hautDB($cnx);
$liste2 =$cake2 ->getVue_haut();
$nbrCakes2=count($liste2);
if(isset( $_GET['choix_type'])){
    //print $_GET['id_type_haut'];
    

$cake = new Vue_hautDB($cnx);
$liste = $cake ->getVue_hautType($_GET['id_type_haut']);

$nbrCakes= count($liste);

}

?>

<div class ="contact center ">
    <form action="<?php print $_SERVER ['PHP_SELF'];?>" method="get" id="form_commande">
        <div class="col-sm-1  center">
            <span class="txtGras center "> Catégorie</span>
        </div>
    <div>
        
        <div class="contact center">
            <select name="id_type_haut" id="id_type_haut">
                <option value=""></option>
              
                <?php
                
                for ($i = 0; $i < $nbrTypes; $i++) {
                    ?>
                    <option value="<?php print $tabTypes[$i]->ID_TYPE_HAUT?>">

                        <?php print $tabTypes[$i]->TYPE_HAUT ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>
        </div>
        <div class="col-sm-2 contact">
            
        <input  type="submit" name="choix_type" value="Choisir"/>
        </div>

    
    </form>
</div>



<section class="contact">
<div class="container contact">
    <?php
    if(isset($liste)){
        if($nbrCakes >0){
    
    ?>
   
            <div class="row contact">
   <?php 
    print utf8_decode($liste[0]['type_haut']);
   ?>
                </div>                             
            </div>
    
    

<table  width="50%" class="col-sm-3 contact table">
        <tr>
            <td>Image</td>
            <td>Nom</td>
            <td>Prix</td>
         


        </tr>
<?php 
    for($i=0;$i<$nbrCakes;$i++){
   ?>
<tr>
    <td class="img"><img src="admin/image/<?php print $liste[$i]['image'];?>" alt="Erreur"/></td><br/>
                   
                   <td><a href="index.php?page=produitchoix&id=<?php print $liste[$i]['id_haut']?>"><?php print ($liste[$i]['nom_haut']);?></a></td>
                    <td><?php print utf8_decode($liste[$i]['prix_unitaire']);?></td></tr>
                    
                




                       
 <?php 
    }
    //fin for$i
    ?></table>
    
             

            
 <?php
 
 } //fin if nbrCakes
 
        
    
 
                }//fin if isset
 ?>

</section>












 






