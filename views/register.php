<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Register</title>
</head>
<body class="bg-light">
  <div style="height: 100vh;">
    <div class="row h-100 m-0">
     <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-white border-0">
          <h1 class="text-cener">REISTER</h1>
         </div>

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

        <button type="submit" name="btn_register" class="btn btn-success btn-block" value="register">Register</button>  

        <p class="text-center mt-3">Registered already? <a href="../views/">Log in</a></p>

      </form>


    </div>     

     </div>
    
    </div>
  
  </div>
  
  




</body>
</html>