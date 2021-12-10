<?php
/**
* @disclaimer : 
* This is software for personal use, misuse of this software is not the responsibility of us (the owner). 
* All legal forms are submitted to their respective users 
*
**/


generate_html(['h1' => 'Hello world !' , 
                'hr' => '',
            'p' => 'Lorem ipsum dolor sit amet, consectetur']);
fuckdump($_SESSION['getCountry']);
            fuckdump(ryu()->handler->detection());
fuckdump(ryu()->api->validate());
fuckdump(CONFIG);

end_html();
?>

<form method="post" action="@form_action_page('welcome')">
    <input type="text" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="***">
    <br>
    <input type="submit" name="submit" value="Go">
</form>
@translate('Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae debitis asperiores tenetur in? Ab ipsam quidem quibusdam consectetur facere sed, repellendus nulla illum nihil dolorum, aperiam a quod incidunt repellat?')
