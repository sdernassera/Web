<?php
if(file_exists('admin/lib/php/dbConnectmysql.php')){
    include('admin/lib/php/dbConnectmysql.php');
    include('admin/lib/php/autoload.php');
}
else if(file_exists('lib/php/dbConnectmysql.php')){
      include('lib/php/dbConnectmysql.php');
    include('lib/php/autoload.php');
}
