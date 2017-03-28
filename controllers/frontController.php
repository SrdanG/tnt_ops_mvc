<?php
namespace tnt\controllers;

require 'views/mainView.php';
use tnt\views\mainView;
require 'views/ucinkovitostView.php';
use tnt\views\ucinkovitostView;
require 'views/vremeView.php';
use tnt\views\vremeView;
require 'views/uploadView.php';
use tnt\views\uploadView;
require 'views/insertView.php';
use tnt\views\insertView;
require 'controllers/insertController.php';
use tnt\controllers\insertController;

class frontController{
    
    public function mainAction(){
     
        $outputMain = new mainView();
        //redirect after 10 seconds to ucinkovitost page
        header( "refresh:10;url=/tnt_ops/index.php/ucinkovitost" );
    }
    
    public function ucinkovitostAction(){
        $outputUcinkovitost = new ucinkovitostView();
        //redirect after 10 seconds to vreme page
        header( "refresh:10;url=/tnt_ops/index.php/vreme" );
    }
    
    public function vremeAction(){
        $outputUcinkovitost = new vremeView();
        //redirect after 10 seconds to main
        header( "refresh:10;url=/tnt_ops/index.php/main" );
        
    }
    
    public function uploadAction(){
        $outputUpload = new uploadView();
    }
    
    public function insertAction(){
        $outputInsert = new insertView();
        
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
    }
}