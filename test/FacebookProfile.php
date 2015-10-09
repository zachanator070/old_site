<?php

  require_once __DIR__ . '/vendor/autoload.php';

  class FacebookProfile{

    private $fb;
    private $fbApp;
    private $helper;
    private $accessToken;
    private $config;

    public function __construct(){

        session_start();


          $this->config['app_id'] ='1642711959335354';
          $this->config['app_secret'] = '6de714ca6cb3358987a6383853a3a235';

          $this->fb = new Facebook\Facebook([
            'app_id' => $this->config['app_id'],
            'app_secret' => $this->config['app_secret'],
            'default_graph_version' => 'v2.2',
            ]);

          $this->fbApp = new Facebook\FacebookApp($this->config['app_id'], $this->config['app_secret']);

          $this->accessToken = $_SESSION['fb_access_token'];
    }


    public function getUserData(){


          $request = $fb->request('GET', '/me/feed');
          $request->setApp($this->fbApp);
          $request->setAccessToken($this->accessToken);
          // Send the request to Graph
          try {
            $response = $fb->getClient()->sendRequest($request);
          } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
          } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
          }

          $graphNode = $response->getGraphNode();

          return var_dump($graphObject);

    }

  }

  $profile = new FacebookProfile();
  echo $profile->getUserData();

 ?>