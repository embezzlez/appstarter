<?php
/** 
 * RYUPANEL 
 * 
 * @package RyuJin-FrameWork
 * @version 1.
 * @author ryujinsoft.
 * 
 */

session_start();
error_reporting(0);

define('RP_ROOT',__DIR__);
define('RP_INC_PATH',RP_ROOT.'/inc/');
define('RP_STATIC_PATH',RP_ROOT.'/static/');
define('PUBLIC_PATH' , dirname(__DIR__));
define('XAPP_PATH', dirname(dirname(__DIR__)) .'/app/');

require RP_INC_PATH  . 'func.php';
require 'ryu-config.php';
define('RYU_CONFIG',$ryu_config);

if(!file_exists(RP_ROOT . '/.ryupanel_key'))
{
    require RP_INC_PATH . 'set_key.php';
    exit;
}

if(empty($_SESSION['ryupanel_login']))
{
    if(!isset($_GET['validate_login'])){
    require RP_INC_PATH.'signin.php';
    }else{
         
            $private_key = RYU_CONFIG['PRIVATE_KEY'];

        if(isset($_POST['private_key']))
        {
            $key = $_POST['private_key'];

            if($key == $private_key)
            {
                $_SESSION['ryupanel_login'] = sha1(session_id());

                die('success');
            }else{
                die('wrong private key !');

            }
        }else{
            die('wrong private key ! data error');
        }
        
    }

}else{

    if(empty($_GET['api'])){

    /** call the header section **/
    require RP_STATIC_PATH.'header.php';

    /** manage dinamic content **/
    require RP_ROOT.'/content.php';

    /** call the footer section **/
    require RP_STATIC_PATH.'footer.php';
    }else{
        require RP_ROOT.'/content.php';
    }
}