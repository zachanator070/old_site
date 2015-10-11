<?php
  include_once("FacebookAuth.php");

  include_once("FacebookProfile.php");
  //this page will be redirected to from Facebook once our user has logged in

  try{

      $auth = new FacebookAuth();

      //we need to get the access token from facebook
      $auth->getAccessToken();
      //then store this token in our session
      $auth->setAccessToken();

      //make our page object
      $profile = new FacebookProfile();
      //print user data for our page
      echo $profile->getUserData();
      //print user feed data from our page
      echo $profile->getFeedData();

  }
  catch(Excetion $e){
    //if something goes wrong print it out
    echo $e->getMessage();
  }
 ?>
