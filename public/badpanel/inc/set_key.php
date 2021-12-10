<?php


 if(isset($_POST['private_key']))
 {
     file_put_contents(RP_ROOT . '/.access_key' , $_POST['private_key']);
     echo "<script>alert('success now you can logged in'); window.location.href='?login=true'; </script>"; 
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting key for login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <div class="flex flex-col min-h-screen min-w-screen justify-center items-center">
        <img src="https://badyouth.net/m.png" class="w-36 mb-10 animate-pulse">
        <div class="bg-white w-2/6 p-5 rounded-sm shadow-lg">
            <header class="mb-5">
                <h1 class="text-xl">Setting key for login</h1>
            </header>
            <form method="POST" id="form" action="?self">
                <div class="mb-3">
                    <label class="block mb-3">New Key</label>
                    <input type="text" autocomplete="off" class="border-solid border-2 border-gray-200 rounded-sm p-2 w-full" name="private_key" id="private_key">
                </div>
                <div class="mb-3">
                    <button id="btn" class="bg-gray-600 text-white items-center flex flex-col w-full justify-center rounded-sm p-3 font-bold disabled">
                        Continue
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>