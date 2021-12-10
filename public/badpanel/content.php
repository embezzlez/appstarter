<?php
/** 
 * RYUPANEL 
 * 
 * @package RyuJin-FrameWork
 * @version 1.
 * @author ryujinsoft.
 * 
 */

 error_reporting(0);
function radio($config,$value)
{
    $cfg = $config[''.$value.''];
    if($cfg == 1)
    {
        return ' 
        <div class="flex flex-row gap-x-2">
            <div class="flex items-center mr-4 mb-4">
                <input id="'.$value.'" type="radio" name="'.$value.'" class="hidden" value="1" checked />
                <label for="'.$value.'" class="flex items-center cursor-pointer">
                   <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                    Yes
                </label>
            </div>
            <div class="flex items-center mr-4 mb-4">
                <input id="'.$value.'2" type="radio" name="'.$value.'" class="hidden" value="0" />
                <label for="'.$value.'2" class="flex items-center cursor-pointer">
                    <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                    No
                </label>
            </div>
        </div>';
    }else{
        return ' 
        <div class="flex flex-row gap-x-2">
            <div class="flex items-center mr-4 mb-4">
                <input id="'.$value.'" type="radio" name="'.$value.'" class="hidden" value="1" />
                <label for="'.$value.'" class="flex items-center cursor-pointer">
                   <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                    Yes
                </label>
            </div>
            <div class="flex items-center mr-4 mb-4">
                <input id="'.$value.'2" type="radio" name="'.$value.'" class="hidden" value="0" checked />
                <label for="'.$value.'2" class="flex items-center cursor-pointer">
                    <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                    No
                </label>
            </div>
        </div>';
    }
}

get_method('stats_api' , function()
{
    exit(json_encode(get_statistic() , JSON_PRETTY_PRINT));
} , 'api');
get_method('home_api' , function()
{
    exit(json_encode(home_api()  ,JSON_PRETTY_PRINT));
}, 'api');


get_method('test_send' , function(){

    $config = get_config();
    if(@mail($config['email_result'] , "Email test send from RyuJin App" , "Hello this is message is test !"))
    {
        echo "<div class='text-2xl text-white bg-green-500 p-5 rounded m-10'>SUCCESS SENT !</div>";
    }else{
        echo "<div class='text-2xl text-white bg-red-500 p-5 rounded m-10'>FAILED TO SENT !</div>";
        // echo "<div class='text-sm bg-white p-2 text-red-500'>".error_get_last()['message']."</div>";
    }

    echo "<meta http-equiv='refresh' content='2;url=?rp=home'>";
});

 get_method('home', function()
{
    require RP_INC_PATH.'home.php';
});

 get_method('statistic', function()
{
    require RP_INC_PATH.'statistic.php';
});

 get_method('configuration', function()
{
    require RP_INC_PATH.'config.php';
});

get_method('logout' , function()
{

    session_destroy();

   ?>
    <div class="animate-pulse text-center">
    
    <h1 class="mt-5 text-center font-bold text-yellow-300">See u next time :)</h1>
    <br><br>
    <b class="text-white">Wait a sec ...</b>
    </div>
    <meta http-equiv="refresh" content="2;url=?">
    <?php
    exit;
});

get_method('reset' , function()
{
     reset_stats();
     echo "<script>alert('reset success'); window.location.href='?rp=statistic'; </script>";
});

get_method('visit' , function()
{
    $param = get_config()['parameter'];

    echo "<meta http-equiv='refresh' content='2;url=../?$param' >";
});


get_method('welcome' , function()
{
    ?>
    <div class="animate-pulse text-center">
    
    <h1 class="mt-5 text-center font-bold text-yellow-300">Welcome to RyuJin Private Framework.</h1>
    <br><br>
    <b class="text-white">Wait a sec ...</b>
    </div>
    <meta http-equiv="refresh" content="2;url=?rp=home">
    <?php
});

