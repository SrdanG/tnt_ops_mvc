
<?php

require 'views/headerView.php';
require 'views/footerView.php' ;
require 'views/insertView.php';
require 'model/db.php';
require 'controllers/insertController.php';
use tnt\views\headerView;
use tnt\views\footerView;
use tnt\views\insertView;
use tnt\controllers\insertController;

$outputHeader = new headerView();
echo $outputHeader->output();

$outputMain = new insertView();

$outputFooter = new footerView();
echo $outputFooter->output();

    /*
     * 

        Well, they don't do the same thing, really.

        $_SERVER['REQUEST_METHOD'] contains the request method (surprise).
        $_POST contains any post data.

        It's possible for a POST request to contain no POST data.

        I check the request method — I actually never thought about testing the $_POST array. 
        I check the required post fields, though. So an empty post request would give the user a lot of error messages - which makes sense to me.
     * 
     */

if (($_SERVER['REQUEST_METHOD'] == 'GET') && !empty($_GET['arrived'])){
    $insertArrived = new insertController();
    $insertArrived->insertArrived();
    
}

if (($_SERVER['REQUEST_METHOD'] == 'GET') && !empty($_GET['departured'])){
    $insertDepartured = new insertController();
    $insertDepartured->insertDepartured();
}

if (($_SERVER['REQUEST_METHOD'] == 'GET') && !empty($_GET['schedule'])){
    $insertSchedule = new insertController();
    $insertSchedule->insertSchedule();
}


?>


