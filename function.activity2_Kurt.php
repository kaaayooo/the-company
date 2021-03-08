<?php

function
displayData($firstname,$age,$username,$password,$email){
  echo "User Information";
    echo"<br>";
  echo "Your name is:".$firstname;
    echo"<br>";
  echo "Your age is:".$age;
    echo"<br>";
  echo "Your username is:".$username;
    echo"<br>";
  echo "Your passwprd is:".$password;
    echo"<br>";
  echo "Your email is:".$email;
}

function show_form(){
  echo "<form method = 'post'>";
  echo "additional details";
    echo "<br>";
    echo "<input type = 'text' name='more details'>";
    echo "<br>";
    echo "<button type = 'submit' name = 'display_additional_info'>additional info</submit>";
    echo "</form>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="card mr-1 mt-2 row-6">
        <div class="card-header bg-primary">
          <h3 class="text-center">User Datails using functions</h3>
        </div>

        <div class="card-body">
          <form action="" method="post">

            <h4>Enter First Name</h4>
            <input type="text" name="firstname" class="form-control">            
            <br>
            <h4>Enter Age</h4>
            <input type="text" name="age" class="form-control">            
            <br>
            <h4>Enter Userename</h4>
            <input type="text" name="username" class="form-control">                                
            <br>
            <h4>Enter Password</h4>
            <input type="text" name="password" class="form-control">            
            <br>
            <h4>Enter Email</h4>
            <input type="text" name="email" class="form-control">            
            <br>
            <button type="submit" name="submit" class="btn    btn-block form-control btn-outline-primary">Submit</button>
            <button type="submit" name="submit" class="btn    btn-block form-control btn-outline-primary">Add info</button>
          </form>
        </div>
    </div>
  </div>

<?php
    if(isset($_POST['submit'])){
      $firstname = $_POST[firstname];
      $age = $_POST[age];
      $username = $_POST[username];
      $password = $_POST[password];
      $email = $_POST[email];
      displayData($firstname,$age,$username,$password,$email);
    }

    if(isset($_POST['add_info'])){
      show_form();
    }
    if(isset($_POST['display_additional_info'])){
      $details = $_POST['more_details'];

      echo $details;
    }
?>
</body>
</html>