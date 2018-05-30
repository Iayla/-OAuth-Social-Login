<?php

session_start();
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId(212347471103-p8l13e0fiejvf9ea2jt4igomp1a89l7m.apps.googleusercontent.com);
$gClient->setClientSecret(T7oIGLTbgdfltaloxwx4QybD);
$gClient-setApplicationName("Social Login");
$gClient->setRedirectUri(http"//localhost:4433/OAuth-Social-Login/G-call back.php);
$gClient->addScope(scope_or_scope:"https;//www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email")



 ?>
