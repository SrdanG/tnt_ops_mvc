<!DOCTYPE html>

<?php
require 'views/headerView.php';
require 'views/footerView.php' ;
use tnt\views\headerView;
use tnt\views\footerView;

$outputHeader = new headerView();
echo $outputHeader->output();
?>
	  
<body>
    <h1>Vremenska napoved</h1>
       <h2>Danes: <?php echo date('d.m.y') ?> </h2>
       <img src="http://meteo.arso.gov.si/uploads/probase/www/fproduct/graphic/sl/fcast_si-subregion_d1h15.png">
</body>
	 
<?php 
$outputFooter = new footerView();
echo $outputFooter->output();
?>

    
