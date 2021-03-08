<?php
 require_once "database.php";
class User extends Database{ 

  public function login($username, $password){

    $sql = "SELECT id, username, `password` FROM users WHERE username = '$username' ";

    $result = $this->conn->query($sql);
      //1,if the username exists
      //2,if the password is correct. compare the login password to database password

    if($result->num_rows == 1){
      // existing
      $user_details = $result->fetch_assoc();
      //print_r($user_details);
      //$user_details is an associative array of the result set

      if(password_verify($password,$user_details['password'])){
      //correct password
        session_start();

        $_SESSION['user_id'] = $user_details['id'];
        //$_SESSION['user_id']=5;
        $_SESSION['username'] = $user_details['username'];

        header("location:../views/dashboard.php");
        exit;

      }else{
      //incorrect password
      echo "The username or password you enterd is incorrect";

      }
    } else{
       //not existing
       echo "The username or password you enterd is incorrect";

    }
  }

  public function createUser($first_name,$last_name,$username,$password,$origin){
    $sql = "INSERT INTO users (first_name,last_name,username,`password`) VALUES ('$first_name','$last_name','$username','$password')";


    if($this->conn->query($sql)){
      if($origin=="register"){
      header("location:../views");  //go to index.php  login page

      exit;
    }elseif($origin=="dashboard"){
      header("location:../views/dashboard.php");
      exit;
    }

    }else{
      die("Error creating user: ". $this->conn->error);
    }

  }

  public function getUsers(){
    $sql = "SELECT id, first_name, last_name, username  FROM users";

    if($result = $this->conn->query($sql)){
      return $result;

    }else{
      die("Error retrieving users: ". $this->conn->error);
    }
  }

    public function getUser($user_id){
      $sql = "SELECT id, first_name, last_name, username FROM users WHERE id = $user_id";

      if($result = $this->conn->query($sql)){
        return $result->fetch_assoc();

      //use fetch_assoc() since we are expecting 1 row only.  
      //return on associative array

      }else{
        die("Error retrieving user: ". $this->conn->error);

      }
    
}

  public function updateUser($user_id, $first_name, $last_name, $username){
    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $user_id ";

    if($this->conn->query($sql)){
      header("location: ../views/dashboard.php");
      exit;
  
    }else{
      die("error updating user: ".$this->conn->error);
    }
  }


  public function deleteUser($user_id){
    $sql = "DELETE FROM users WHERE id = $user_id";

    if($this->conn->query($sql)){
      header("location: ../views/dashboard.php");
      exit;
      
    }else{
      die("error deleting user: ". $this->conn->error);
    }
     
  }
}
?>