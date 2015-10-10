
<html>

  <body>
    <?php

      include_once "FacebookLogin.php";

    //create a new element that displays html
      $fbLink = new FacebookLogin();
    //get the content of our facebook link and display it
      echo $fbLink->getContent();

     ?>

     <br>

     <!--Link to our AJAX script to get the supported languages of lingotek-->
     <a href="Languages.html">Supported Languages</a>

   </body>
</html>
