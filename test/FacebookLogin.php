<?php

require_once __DIR__ . '/vendor/autoload.php';


class FacebookLogin{

  private $fb;
  private $helper;

  public function __construct(){

    session_start();

    $this->fb = new Facebook\Facebook([
      'app_id' => '1642711959335354',
      'app_secret' => '6de714ca6cb3358987a6383853a3a235',
      'default_graph_version' => 'v2.2',
      ]);

      $this->helper = $fb->getRedirectLoginHelper();
  }

  public function getContent(){

    $permissions = ['email', 'user_likes','user_posts']; // optional
    $loginUrl = $this->helper->getLoginUrl('http://thezachcave.com/test/FacebookRedirect.php', $permissions);

    return '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

  }

}


?>
