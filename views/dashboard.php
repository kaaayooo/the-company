<?php
  session_start();
  include "../classes/user.php";

  $user = new User;
  $user_list = $user->getUsers();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Dashboard</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="dashboard.php" class="navbar-brand">
      <h1 class="h3">The company</h1>
    </a>
  
    <div class="ml-auto"><
      <ul class="navbar-nav">
        <li class="nav-item"><a href="#" class="nav-link">Username:  <?=$_SESSION['username']?></a></li>
        <li class="nav-item"><a href="../action/logout.php" class="nav-link text-danger">Log out</a></li>
      </ul>
    </div>
  </nav>

  <main class="container" style="padding-top: 80px;">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form action="../actions/register.php" method="post">      
              <label for="first_name">First Name</label>
              <input type="text" name="first_name" id="first_name" class="form-control mb-2" required autofocus>

              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" id="last_name" class="form-control mb-2" required >

              <label for="username" class="font-weight-bold">Username</label>
              <input type="text" name="username" id="username" class="form-control mb-2 font-weight-bold" maxlength="15" required >
        
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control mb-5" minlength="8" required >

              <button type="submit" name="btn_register" class="btn btn-success btn-block" value="dashboard">Register</button>  
            </form>
          </div>
        </div>
      </div>
      <div class="col-6">
        <h2 class="text-muted">User list</h2>

        <table class="table table-hover">  
          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>First name</th>
              <th>Last name</th>
              <th>Username</th>
              <th></th>
            </tr>
          </thead>

        <tbody>
          <?php
          
            //$user_list->fetch_assoc() transform the result set/$user_list to an associative arry
            // $user is an assosiative array
            while($user = $user_list->fetch_assoc()){
          
          ?>

            <tr>
              <td><?php echo $user['id']?></td>
              <td><?=$user['first_name']?></td>
              <td><?=$user['last_name']?></td>
              <td><?=$user['username']?></td>
              <td>
                <a href="editUser.php?user_id=<?= $user['id']?>" class="btn btn-warning btn-sm">edit</a>
                <a href="../actions/removeUser.php?user_id=<?= $user['id']?>" class="btn btn-outline-danger btn-sm">remove</a>
              </td>
            </tr>
          

          <?php
            }
          ?>
        </tbody>

        </table>
      </div>
    </div>
  </main>


 </body>
</html>