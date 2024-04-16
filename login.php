
 <?php

  include("connection.php");
  include("validateInput.php");

  // if ($_SERVER["REQUEST_METHOD"] === "POST") {
  //   #validating user inputs
  //   #$username = htmlspecialchars($_REQUEST["userID"]);
  //   // OR CREATING AN INPUT VALIDATION FUNCTION TO TEST ALL DATA INPUT

  //   $username  = validateInput($_POST["userID"]);
  //   if (empty($username)) {
  //     echo " Please enter USER ID ";
  //   } else {
  //     // echo "<strong>Hello World</strong><br>" . $username;
  //     header("location: dashboard.php");
  //     $data = empty($username);
  //   }
  // }

  while ($_SERVER["REQUEST_METHOD"] === "POST") {


    if (empty(validateInput($_POST["username"])) || empty(validateInput($_POST["password"]))) {
      echo "Complete the empty Field(s)";
      header('Location: login.html');
    } 
    
    else {
      $username = validateInput($_POST["username"]);
      $password = validateInput($_POST["password"]);
      // $sql = "SELECT username FROM users WHERE username = '$username' and password = '$password' ";
      $sql="SELECT roleid, Accountstatus,password_hash FROM users WHERE username='$username' and password='$password'";

      $result = mysqli_query($db, $sql);
      $row=mysqli_fetch_array($result);

      // if (mysqli_num_rows($result) == 1)
      if(mysqli_num_rows($result) == 1 && $row["roleid"]=="1" && $row["Accountstatus"]=="1" && password_verify($_POST["password"], $row["password_hash"]) )
      
      {

        session_start();
        header("Location: dashboard.php");
      } 
      elseif (mysqli_num_rows($result) == 0) {
        echo "Incorrect Username or Password 
        <br> <a href=\"login.html\"> Login <a>";
        exit;
      }
      else {
        echo "<h1>Incorrect Password or email </h1>";
        header("Location: login.php");
      }
    }

  }




  ?>