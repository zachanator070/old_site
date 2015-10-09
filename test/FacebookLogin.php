<?php

require_once __DIR__ . '/vendor/autoload.php';

# login.php
$fb = new Facebook\Facebook([
  'app_id' => '1642711959335354',
  'app_secret' => '6de714ca6cb3358987a6383853a3a235',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://thezachcave.com/test/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>
