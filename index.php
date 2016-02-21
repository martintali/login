<?php
/**
 * Created by PhpStorm.
 * User: martindaniel
 * Date: 2/20/16
 * Time: 9:08 PM
 */

require_once "vendor/autoload.php";

$class = new \MartinTali\Login\Martin();

var_dump($class->isConnected(false));