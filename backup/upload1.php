
<?php 

require 'views/headerView.php';
require 'views/footerView.php';
require 'views/uploadView.php';
use tnt\views\headerView;
use tnt\views\footerView;
use tnt\views\uploadView;

$outputHeader = new headerView();
echo $outputHeader->output();

$outputUpload = new uploadView();

$outputFooter = new footerView();
echo $outputFooter->output();

?>
