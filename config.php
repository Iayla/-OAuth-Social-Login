<?php

session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId();
$gClient->setClientSecret();
$gClient-setApplicationName("Social Login");
$gClient->setRedirectUri(http"//localhost:4433/OAuth-Social-Login/G-call back.php);
$gClient->addScope(scope_or_scope:"https;//www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email")



 ?>
