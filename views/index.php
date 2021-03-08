<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Login</title>
</head>

<body class="bg-light">
  <div style="height: 100vh;">
    <div class="row h-100 m-0">
      <div class="card w-25 mx-auto my-auto">
        <div class="card-header bg-white border-0">
        <h1 class="text-center">Login</h1>
        </div>

      <div class="card-body">
        <form action="../actions/login.php" method="post">
          <input type="text" name="username" placeholder="USERNAME" class="form-control
          mb-2 " required autofocus>
          <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5">

          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <p class="text-center mt-3 small">
        <a href="register.php">Create Account</a>
        </p>
      </div>

      </div>
    </div>
  
  </div>
  
</body>
</html>