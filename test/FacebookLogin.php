<?php

require_once __DIR__ . '/vendor/autoload.php';

include_once "FacebookConf.php";

//this object represents a login page that we would use
//for other users to log in to facebook through our site
class FacebookLogin{

  private $fb;
  private $helper;



  public function __construct(){

    session_start();

    global $conf;

    //declare our facebook object to use to interact with the FacebookSDK
    $this->fb = new Facebook\Facebook([
      'app_id' => $config['app_id'],
      'app_secret' => $config['app_secret'],
      'default_graph_version' => 'v2.2',
      ]);

    $this->helper = $this->fb->getRedirectLoginHelper();
  }

//return the html that we want to use to display the page
  public function getContent(){

    $permissions = ['email', 'user_likes','user_posts']; // wee need to request these permissions from the user
    $loginUrl = $this->helper->getLoginUrl('http://thezachcave.com/test/FacebookRedirect.php', $permissions);

    //return our html
    return '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

  }

}


?>
