<?php
  include_once("FacebookAuth.php");

  $auth = new FacebookAuth();

  $auth->getAccessToken();
  $auth->setAccessToken();

  //header("Location: FacebookProfile.php");

 ?>
