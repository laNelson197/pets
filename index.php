<?php
/* Lillian nelson
 * January 2024
 * https://github.com/laNelson197/diner.git
 * This is my CONTROLLER
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require vendor/autoload
require_once('vendor/autoload.php');

//Instantiate fat-free
$f3 = Base::instance();

$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->run();

?>