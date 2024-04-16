<?php

include('connection.php');
 $username=$_POST['username'];
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $confirmPassword=$_POST['confirmPassword'];
 $roleid = $_POST['roleid'];

    if($password !== $confirmPassword)
    {
       echo "password and confirm password are not same";
    }
       
    else
    {   
        $sql = "INSERT INTO users (username,password,email, roleid) VALUES ('$username','$password','$email','$roleid')";
        $sql2 = "INSERT INTO persons (firstname,lastname,email) VALUES ('$firstname','$lastname','$email')";
           
        $result = mysqli_query($db, $sql);
        $result2 = mysqli_query($db, $sql2);

        if($result && $result2)
        {
            echo "Registered Successfully";
             header("Location: login.html");
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: Register.php");
        }
    }
   
?>