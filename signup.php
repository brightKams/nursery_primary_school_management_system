<?php 

  include("connection.php");
  include("validateInput.php");

//  $username=$_POST['username'];
//  $firstname=$_POST['firstname'];
//  $lastname=$_POST['lastname'];
//  $email=$_POST['email'];
//  $password=$_POST['password'];
//  $confirmPassword=$_POST['confirmPassword'];
 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

      if (empty(validateInput($_POST["fName"])) || empty(validateInput($_POST["lName"])) || empty(validateInput($_POST["email"])) || empty(validateInput($_POST["username"])) || empty(validateInput($_POST["password"])) || empty(validateInput($_POST["confirmPassword"]))) {
        echo "Complete the empty Field(s)";
        header('Location: signup.html');
        exit();
      } elseif (validateInput($_POST['password']) !==  validateInput($_POST["confirmPassword"])) {
        echo "Password does not match Confirm Password ";
        exit();
        // header("Location: signup.html");
      }

      else {
        $first_name = validateInput($_POST["fName"]);
        $last_name = validateInput($_POST["lName"]);
        $email = validateInput($_POST["email"]);
        $username = validateInput($_POST["username"]);
        $password = validateInput($_POST["password"]);
        $confirm_password = validateInput($_POST["confirmPassword"]);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
       
        $sql =  "INSERT INTO users (username, password_hash, password,email, roleid) VALUES ('$username', '$password_hash', '$password', '$email', '1')" ;
        $sql2 = "INSERT INTO persons (firstname, lastname,  email)  VALUES ('$first_name', '$last_name',  '$email')" ;
        $stmt = $db->stmt_init();
  #####
  // $stmt_user = $db->prepare($sql);
  // $stmt_person = $db->prepare($sql2);

  if (!$stmt->prepare($sql)) {
    die("SQL error: " . $db->error);
}


  #####

        $result = mysqli_query($db, $sql) ;
        $result2 = mysqli_query($db, $sql2) ;
  
       if ($result && $result2) {
        echo "Registered Successfully" ;
        header("Location: login.html");
       }
       
        else {
          echo "<h1>Please register with correcct details! </h1>";
          header("Location: signup.html");
          exit();
        }
      }
    }
    ##############



?>