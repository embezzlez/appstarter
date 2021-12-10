<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <div class="flex flex-col min-h-screen min-w-screen justify-center items-center">
        <img src="https://badyouth.net/m.png" class="w-36 mb-10 animate-pulse">
        <div class="bg-white w-2/6 p-5 rounded-sm shadow-lg">
            <header class="mb-5">
                <h1 class="text-xl">Login</h1>
            </header>
            <form method="POST" id="form">
                <div class="mb-3">
                    <label class="block mb-3">Private Key</label>
                    <input type="password" class="border-solid border-2 border-gray-200 rounded-sm p-2 w-full" name="private_key" id="private_key">
                </div>
                <div class="mb-3">
                    <button id="btn" class="bg-gray-600 text-white items-center flex flex-col w-full justify-center rounded-sm p-3 font-bold disabled">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#btn').hide();

            $('#private_key').keyup(function(){
                var len = $('#private_key').val();
                
                if(len.length > 5 ){
                    $('#btn').show();
                }else{
                    $('#btn').hide();
                }
            });
            $('#btn').click(function(e){
                e.preventDefault();

               $.ajax({
                   type : 'POST',
                   url : '?validate_login',
                   data : $('#form').serialize(),
                   success:function(data)
                   {
                       if(data == 'success')
                       {
                        window.location.href = '?rp=welcome';
                       }else{
                           alert(data);
                       }
                   }
               })
            });
        });
    </script>
</body>
</html>