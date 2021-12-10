<?php
/**
* ------------------------------------------------------
* FILE GENERATED FROM RYUCLI ( Sat,07-08-2021 22:13 )
* @filename welcome.php
* ------------------------------------------------------
*
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


generate_html(['h1' => 'Hello world !, RyuJin Framework' , 
                'hr' => '',
            'p' => 'Lorem ipsum dolor sit amet, consectetur']);
fuckdump($_SESSION['getCountry']);
            fuckdump(ryu()->handler->detection());
fuckdump(ryu()->api->validate());
fuckdump(CONFIG);

end_html();
?>

<form method="post" action="<?php echo (new Embezzle)->form_action_page('welcome'); ?>">
    <input type="text" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="***">
    <br>
    <input type="submit" name="submit" value="Go">
</form>
<?php echo (new Embezzle)->tr('Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae debitis asperiores tenetur in? Ab ipsam quidem quibusdam consectetur facere sed, repellendus nulla illum nihil dolorum, aperiam a quod incidunt repellat?'); ?>
<?php /**PATH /home/iu/workspace/ryuframework/app/pages/welcome.blade.php ENDPATH**/ ?>