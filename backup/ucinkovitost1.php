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
        <h1>Quality control</h1>    
       <h2>Danes: <?php echo date('d.m.y') ?> </h2>
       <img src="/tnt_ops/uploads/ucinkovitost.png" alt="Ucinkovitost" style="width:1100px;height:500px;">       
    </body>

<?php 
$outputFooter = new footerView();
echo $outputFooter->output();
?>



