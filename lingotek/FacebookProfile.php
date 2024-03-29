<?php

  require_once __DIR__ . '/vendor/autoload.php';

  include_once("FacebookConf.php");

  //this class will displaty user infomation about the user who logged in
  class FacebookProfile{

    private $fb;
    private $fbApp;
    private $helper;
    private $accessToken;

    public function __construct(){

        session_start();

        global $config;

        $this->fb = new Facebook\Facebook([
          'app_id' => $config['app_id'],
          'app_secret' => $config['app_secret'],
          'default_graph_version' => 'v2.2',
          ]);

        $this->fbApp = new Facebook\FacebookApp($config['app_id'], $config['app_secret']);

        //grab our access token from our session
        $this->accessToken = $_SESSION['fb_access_token'];
    }


    //this will get user infomation from Facebook using our access token
    //and return this info as a string
    public function getUserData(){

          $request = $this->fb->request('GET', '/me');
          $request->setApp($this->fbApp);
          $request->setAccessToken($this->accessToken);
          // Send the request to Graph
          try {
            $response = $this->fb->getClient()->sendRequest($request);
          } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
          } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
          }

          $graphUser = $response->getGraphUser();

          $info="<h1>User Information</h1>";

          foreach ($graphUser as $key => $value) {
            $info.= $key.=" :: ".$value;
            $info.="</br>";
          }

          $info .= "<h2>Response</h2><br>";
          //displaying info from line 38
          $info.="Method: HTTP GET<br>";
          $info.="url = '/me'<br>";
          $info.= "http status code:".$response->getHttpStatusCode()."<br>";
          //$info.= "http headers:".var_dump($response->getHeaders())."<br>";
          $info .= "http body:".$response->getBody()."<br>";

          //return our semi parsed JSON
          return $info;

    }

    //this will grab feed data from a user using our access token
    public function getFeedData(){

      $request = $this->fb->request('GET', '/me/feed');
      $request->setApp($this->fbApp);
      $request->setAccessToken($this->accessToken);
      // Send the request to Graph
      try {
        $response = $this->fb->getClient()->sendRequest($request);
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }

      $graphEdge = $response->getGraphEdge();

      $posts = "";

      $posts.="<h1>User Profile Feed</h1>";

      //parse through the JSON object
      foreach ($graphEdge as $index => $json) {

        $posts.= "<h2>Index $index</h2><br>";

        foreach($json as $type =>$content){
          //wierd case where an field is a DateTime object
          if(is_a($content, 'DateTime')){
            $posts.= $type.=" :: ".$content->format('Y-m-d H:i:s')."</br>";

          }
          else{
            $posts.= $type.=" :: ".$content."</br>";
          }

        }


      }

      $posts .= "<h1>Response</h1><br>";
      //displaying info from line 77
      $posts.="Method: HTTP GET<br>";
      $posts.="url = '/me/feed'<br>";
      $posts.= "http status code:".$response->getHttpStatusCode()."<br>";
      //$posts.= "http headers:".var_dump($response->getHeaders())."<br>";
      $posts .= "http body:".$response->getBody()."<br>";

      //returns a semi parsed JSON
      return $posts;

    }

  }

 ?>
