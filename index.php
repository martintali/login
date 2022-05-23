<?php
/**
 * Created by PhpStorm.
 * User: martindaniel
 * Date: 2/20/16
 * Time: 9:08 PM
 */

require_once "vendor/autoload.php";

date_default_timezone_set('America/Argentina/Buenos_Aires');

$class = new \MartinTali\Login\Martin();

$app = new Silex\Application();

$app->get('/', function () {
    $output = '';

    return "HOLA";
});
break;
$app->run();
