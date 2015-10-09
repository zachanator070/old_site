<?php

require_once __DIR__ . '/vendor/autoload.php';


class FacebookAuth{

  private $fb;
  private $helper;

  public $accessToken;

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

    $this->helper = $this->fb->getRedirectLoginHelper();

  }

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

    $request = new Facebook\FacebookRequest($this->fb, $this->accessToken, 'GET', '/me/feed');
    $response = $request->execute();
    $graphObject = $response->getGraphObject();

    return var_dump($graphObject);

  }

  private function getLongAccessToken(){


    // The OAuth 2.0 client handler helps us manage access tokens
    $oAuth2Client = $this->fb->getOAuth2Client();

    // Get the access token metadata from /debug_token
    $tokenMetadata = $oAuth2Client->debugToken($this->accessToken);

    // Validation (these will throw FacebookSDKException's when they fail)
    $tokenMetadata->validateAppId($config['app_id']);
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

  public function setAccessToken(){
    $_SESSION['fb_access_token'] = $this->accessToken;
  }


}




// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
// header('Location: https://example.com/members.php');
?>
