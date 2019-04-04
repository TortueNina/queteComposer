<?php
/**
 * Created by PhpStorm.
 * User: cyrano
 * Date: 2019-04-04
 * Time: 18:01
 */

require __DIR__ . '/../vendor/autoload.php';
require '../src/Wcs/Hello.php';


echo \HelloWorld\SayHello::world();
echo \App\WCS\Hello::talk();

