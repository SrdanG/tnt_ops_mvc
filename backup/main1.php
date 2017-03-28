<?php 
require 'views/headerView.php';
require 'views/footerView.php';
require 'views/mainView.php';
use tnt\views\headerView;
use tnt\views\footerView;
use tnt\views\mainView;

$outputHeader = new headerView();
echo $outputHeader->output();

$outputMain = new mainView();
//echo $outputMain->output();

$outputFooter = new footerView();
echo $outputFooter->output();
?>

