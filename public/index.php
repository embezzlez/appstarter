<?php


/**
* @package RyuFramework
* 
* @author shinryu
* @version v1.0-21
* @copyright 2021 shinryujin
*
*
* @disclaimer : 
* This is software for personal use, misuse of this software is not the responsibility of us (the owner). 
* All legal forms are submitted to their respective users 
*
**/
session_start();
error_reporting(0);



require_once(dirname(__DIR__).'/vendor/autoload.php');


$ryu = new Embezzle;
$ryu->run();