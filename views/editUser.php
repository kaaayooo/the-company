<?php
  session_start();
  include_once "../classes/user.php";

  $user_id = $_GET['user_id'];
  $user = new User ;
  $user_details = $user->getUser($user_id);
  //$user_details is an associative array of result set

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Edit User</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="dashboard.php" class="navbar-brand">
      <h1 class="h3">The company</h1>
    </a>
  
    <div class="ml-auto">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="#" class="nav-link">Username:  <?=$_SESSION['username']?></a></li>
        <li class="nav-item"><a href="../action/logout.php" class="nav-link text-danger">Log out</a></li>
      </ul>
    </div>
  </nav>

  

 <main class="container" style="padding-top: 80px; ">
  <div class="card w-50 mx-auto border-0">
    <div class="card-header bg-white border-0">
      <h1 class="text-center">Edit user</h1>
    </div>

    <div class="card-body"> 
      <form action="../actions/editUser.php" method="post">

        <input type="hidden" name="user_id" value="<?=$user_details['id']?>">

        <label for="first_name">First Name</label>
          <input type="text" name="first_name" id="first_name" class="form-control mb-2" value="<?=$user_details['first_name']?>" required autofocus>

        <label for="last_name">Last Name</label>
          <input type="text" name="last_name" id="last_name" class="form-control mb-2" value="<?=$user_details['last_name']?>"required >

        <label for="username"       class="font-weight-bold">Username</label>
          <input type="text" name="username" id="username" class="form-control mb-5 font-weight-bold" maxlength="15" value="<?=$user_details['username']?>" required >
      
        <div class="text-right">
          <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
          <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
        </div>
    </div>
    </form>
  </div>       

</main> 


</body>
</html>