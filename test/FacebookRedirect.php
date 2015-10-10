<?php
  include_once("FacebookAuth.php");

  //this page will be redirected to from Facebook once our user has logged in

  $auth = new FacebookAuth();

  //we need to get the access token from facebook
  $auth->getAccessToken();
  //then store this token in our session
  $auth->setAccessToken();

  header("Location: FacebookProfile.php");

 ?>
