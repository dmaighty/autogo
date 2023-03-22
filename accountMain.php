<?php
  session_start();
  $username = "$_SESSION[username]";
  if (!$username){
    header("Location: index.php");
  }
 ?>



<html>
  <head>
    <meta charset="UTF-8">
    <title> Main </title>
    <link rel="stylesheet" href="styles2.css">
  </head>
  <body>

<!-- Top of bar box. Designed with CSS flexdispalays.  -->
      <div class = "topBox">
        <div class = "leftBoxL">
          <button class="toplink"><a href="accountMain.php" id="topcolor">RoBank</a></button>
        </div>
        <div class = "buttonGroup">


            <div class = "rightBoxR">
              <button class="toplink"><a href="accountLogin.php" id="topcolor">Logout</a></button>
            </div>
          </div>
      </div>

      <div>
        The main website should go here
      </div>
      
      <div class = "bottomBox">
        <div class = "centerBox3">
          <div class = "centerButtons">
            <button class="centerButtons"><a href="accountInformation.php" id="topcolor">User Information</a></button>
          </div>
        </div>
      </div>
  </body>
</html>
