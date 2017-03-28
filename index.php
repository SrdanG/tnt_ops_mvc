<?php

require 'controllers/frontController.php';
use tnt\controllers\frontController;

$frontController = new frontController();

/* Creating fronController 
 * 
 * But be careful not to confuse the terms front controller and controller. 
 * Your app will usually have just one front controller, which boots your code. 
 * You will have many controller functions: one for each page.
 *    */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/tnt_ops/index.php/main' === $uri) {
    $frontController->mainAction();
} elseif ('/tnt_ops/index.php/ucinkovitost' === $uri) {
    $frontController->ucinkovitostAction();
} elseif ('/tnt_ops/index.php/vreme' === $uri) {
    $frontController->vremeAction();
} elseif ('/tnt_ops/index.php/upload' === $uri) {
    $frontController->uploadAction();
} elseif ('/tnt_ops/index.php/insert' === $uri) {
    $frontController->insertAction();
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
    var_dump($uri);
}




