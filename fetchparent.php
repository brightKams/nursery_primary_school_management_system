<?php
include("connection.php"); //Establishing connection with our database
   /* if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }
    else*/
    {
        $username=$_POST['username'];
       // $password=$_POST['password'];
        //$sql="SELECT userid FROM users WHERE username='$username' and password='$password'";
        //$sql="SELECT u.userid,r.roleid,r.Description FROM users u, roles r WHERE u.roleid=r.roleid and u.username='$username' and u.password='$password'";
        $sql="SELECT u.*, p.* FROM users u, persons p WHERE u.username='$username' and p.email=u.email";
    }
        ?>