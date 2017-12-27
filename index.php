<?php
session_start();
include('admin/lib/php/adm_liste_include.php');
$cnx = Connexion::getInstance($dsn, $user, $pass);
require"pages/_header.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="admin/lib/css/bootstrap-4/css/bootstrap.css"/>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-railway-webfont.css" />
        <link rel="stylesheet" href="assets/css/linearicons-web-font.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <title>Boutique En ligne</title>


    </head>
    <body>

        <header>  
             
            <header id="home" class="home home-main-content">
                <div class="overlay sections">
                    <div class="container text-center">
                        <div class="row">
                            <div class="div-menu">
                                <header class="cd-header">
                                    <div id="cd-logo">
                                        <a href="index.php"><img src="assets/images/logo.png" alt="Logo"></a>
                                    </div>
                                    <a class="cd-menu-trigger" href="#main-nav"><span></span></a>

                                    <?php
                                    if (file_exists("./lib/php/menu.php")) {
                                        include ("./lib/php/menu.php");
                                    }
                                    ?>
                                </header>
                            </div>


                            <div class="home-wrapper">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                    <div class="home-content">
                                        <h1>Boutique en ligne</h1>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            
            
                    <section id="contact" class="contact">
                         <?php
                                    if (file_exists("./pages/info.php")) {
                                        include ("./pages/info.php");
                                    }
                                    ?>
            
        </section>
            
            <div>
               
                <section>
                        <?php
                            if (!isset($_SESSION['page'])) {

                                $_SESSION['page'] = "accueil";
                            }
                            //on a cliqué sur un lien du menu`

                            if (isset($_GET['page'])) {

                                $_SESSION['page'] = $_GET['page'];
                            }
                            $path = "./pages/" . $_SESSION['page'] . ".php";

                            if (file_exists($path)) {

                                include ($path);
                            } else {
                                print "Oupssss";
                            }
                            ?>

                </section>
            </div>












            <!--Footer-->
            <footer >



            </footer>


            <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
            <script src="assets/js/vendor/bootstrap.min.js"></script>

            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/jquery.magnific-popup.js"></script>
            <script src="assets/js/modernizr.js"></script>

            <script src="assets/js/main.js"></script>
    </body>
</html>
