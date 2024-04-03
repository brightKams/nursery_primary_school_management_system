<?php
//include("connection.php");
//$email=$_POST['email'];
$username=$_POST['username'];
if($_SERVER["REQUEST_METHOD"]==="POST"){

    $db = require __DIR__ . "/connection.php";

   $sql = sprintf("SELECT username, password_hash, email FROM Users
                    WHERE username = '$username'");
                    //$db->real_escape_string($_POST["username"]));

        //$username=$_POST['username'];
        //$password_hash=$_POST['password'];
        //$sql="SELECT userid FROM users WHERE username='$username' and password='$password'";
        //$sql="SELECT u.userid,r.roleid,r.Description FROM users u, roles r WHERE u.roleid=r.roleid and u.username='$username' and u.password='$password'";
       // $sql="SELECT * FROM users WHERE username='$username' and password_hash='$password_hash'";


    $result = $db->query($sql);

    //$user = $result->fetch_assoc();
     $user=mysqli_fetch_array($result);

    if ($user){

        if (password_verify($_POST["password"], $user["password_hash"])){

            //die("Login successful");
            header("location: profile-update.php");
        }
    }

   // var_dump($user);
    //exit;
}

?>