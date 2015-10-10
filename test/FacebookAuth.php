<?php

require_once __DIR__ . '/vendor/autoload.php';

include_once "FacebookConf.php";

class FacebookAuth{

  private $fb;
  private $helper;

  public $accessToken;

  public function __construct(){

    global $config;

    session_start();

    //create our Facebook object that we will use to interact with the Facebook SDK
    $this->fb = new Facebook\Facebook([
      'app_id' => $config['app_id'],
      'app_secret' => $config['app_secret'],
      'default_graph_version' => 'v2.2',
      ]);

    $this->helper = $this->fb->getRedirectLoginHelper();

  }

  //used to create an access token from Facebook that we will store in our session
  //so that we can make authorized requests to a users page later
  public function getAccessToken(){

    try {

      $this->accessToken = $this->helper->getAccessToken();

    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    //prints an error from our helper if we did not get an access token
    if (! isset($this->accessToken)) {
      if ($this->helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $this->helper->getError() . "\n";
        echo "Error Code: " . $this->helper->getErrorCode() . "\n";
        echo "Error Reason: " . $this->helper->getErrorReason() . "\n";
        echo "Error Description: " . $this->helper->getErrorDescription() . "\n";
      } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
      }
      exit;
    }

    $this->getLongAccessToken();

  }

  //getLongAccessToken will request that our token have a longer lifetime from
  //the Facebook SDK
  private function getLongAccessToken(){


    // The OAuth 2.0 client handler helps us manage access tokens
    $oAuth2Client = $this->fb->getOAuth2Client();

    // Get the access token metadata from /debug_token
    $tokenMetadata = $oAuth2Client->debugToken($this->accessToken);

    // Validation (these will throw FacebookSDKException's when they fail)
    $tokenMetadata->validateAppId($this->config['app_id']);
    // If you know the user ID this access token belongs to, you can validate it here
    // $tokenMetadata->validateUserId('123');
    $tokenMetadata->validateExpiration();

    if (! $this->accessToken->isLongLived()) {
      // Exchanges a short-lived access token for a long-lived one
      try {
        $this->accessToken = $oAuth2Client->getLongLivedAccessToken($this->accessToken);
      } catch (Facebook\Exceptions\FacebookSDKException $e) {
        error_log("Error getting long-lived access token: " . $this->helper->getMessage());
        exit;
      }

    }

  }

  //takes the access token from our FacebookAuth object and places it into our session
  public function setAccessToken(){
    $_SESSION['fb_access_token'] = $this->accessToken;
  }


}

?>
