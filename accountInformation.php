<?php
  // this php code checks if user is logged in
  session_start();
  $username = "$_SESSION[username]";
  if (!$username){
    header("Location: accountLogin.php");
  }
 ?>

<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles2.css">
    <title>Robank Account Page</title>
  </head>

  <body>

<!-- Top of bar box. Designed with CSS flexdispalays.  -->
      <div class = "topBox">
        <div class = "leftBoxL">
          <button class="toplink"><a href="index.php" id="topcolor">Autogo</a></button>
        </div>

        <div class = "buttonGroup">
          <div class = "rightBoxR">
            <button class="toplink"><a href="index.php" id="topcolor">Logout</a></button>
          </div>
        </div>
    </div>
          <H3> Account Information </H3>
          <div class = "centerList">


            <?php
            // checks username, and puts the table row into variables
            // prints out
              {
                $conn = mysqli_connect("localhost", "root", "", "autogo");
                $sql = "SELECT * FROM `users` WHERE `username`='$username'  ";
                $result = $conn->query($sql);
                $_SESSION['username']=$username;
                foreach($result as $row) {
                  $firstName = $row["firstname"];
                  $lastName = $row["lastname"];
                  $phoneNumber = $row["phone"];
                  $email = $row["email"];
                  $address = $row["address"];

                  echo "<table>";
                  echo  "<tr>";
                  echo    "<th>First Name</th>";
                  echo    "<th>".$firstName."</th>";
                  echo "<tr/>";
                  echo  "<tr>";
                  echo    "<th>Last Name</th>";
                  echo    "<th>".$lastName."</th>";
                  echo  "<tr/>";
                  echo  "<tr>";
                  echo    "<th>Address</th>";
                  echo    "<th>".$phoneNumber."</th>";
                  echo  "<tr/>";
                  echo  "<tr>";
                  echo    "<th>Email</th>";
                  echo    "<th>".$email."</th>";
                  echo  "<tr/>";
                  echo  "<tr>";
                  echo    "<th>Phone Number</th>";
                  echo    "<th>".$address."</th>";
                  echo  "<tr/>";
                  echo"</table>";
                }
              }
            ?>
    </html>
