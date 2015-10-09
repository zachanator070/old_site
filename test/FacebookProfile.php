<?php

  require_once __DIR__ . '/vendor/autoload.php';

  class FacebookProfile{

    private $fb;
    private $helper;
    private $accessToken;

    public function __construct(){

        session_start();

          $this->fb = new Facebook\Facebook([
            'app_id' => '1642711959335354',
            'app_secret' => '6de714ca6cb3358987a6383853a3a235',
            'default_graph_version' => 'v2.2',
            ]);

            $this->accessToken = $_SESSION['fb_access_token'];
    }


    public function getUserData(){

      $request = new Facebook\FacebookRequest($this->fb, $this->accessToken, 'GET', '/me/feed');
      $response = $request->execute();
      $graphObject = $response->getGraphObject();

      return var_dump($graphObject);

    }

  }

  $profile = new FacebookProfile();
  echo $profile->getUserData();

 ?>
