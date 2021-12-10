<?php
/**
* @disclaimer : 
* This is software for personal use, misuse of this software is not the responsibility of us (the owner). 
* All legal forms are submitted to their respective users 
*
**/

session_start();
error_reporting(0);



require_once(dirname(__DIR__).'/vendor/autoload.php');
$boot = new Embezzle;
$boot->run();