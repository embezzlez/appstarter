<?php
/** 
 * @RyuFramework
 * -----------------------------------------------
 * CONFIG BRU. 
 * -----------------------------------------------
*/

$BASE_CFG = __DIR__;
$SCAN_APP = scandir($BASE_CFG);
$EXCEPT   = ['.',
			 '..',
			 'config.php',
			 'index.php',
			 'index.html',
			 '.signature',
			 'ryujin-config.ini',
			 'config.json'
			
			];

foreach($SCAN_APP as $CFG)
{
	if(in_array($CFG,$EXCEPT))continue;

	require_once $BASE_CFG.'/'.$CFG;
}