<?php

include('connection.php');
 $username=$_POST['username'];
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $confirmPassword=$_POST['confirmPassword'];
 //$roleid = $_POST['2'];
 /*  
 //New section starts
if (empty($_POST["firstname"])){
    die("First Name is required!");
}

if (empty($_POST["username"])){
    die("User Name is required!");
}

if (! filter_var($_POST["email"], FILTE_VALIDATE_EMAIL)){
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8){
    die("Password must be at least 8 characters.");
}

    if (! preg_match("/[a-z]/i", $_POST["password"])){
        die("Password must contain at least on letter.");
    }
     if (! preg_match("/[0-9]/", $_POST["password"])){
        die("Password must contain at least on number.");
    }
       
    //New section ends
    */
    if($password !== $confirmPassword)
    {
       echo "password and confirm password are not same";
    }
       
    else
    {   
        //New lines begin here
        $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
        //var_dump($password_hash);
        //New line ends here
        //$sql = "INSERT INTO users (username,password,email, roleid) VALUES (?, ?, ?', '1')";
        $sql = "INSERT INTO users (username,password_hash,email, roleid) VALUES ('$username','$password_hash','$email','1')";
        $sql2 = "INSERT INTO persons (firstname,lastname,email) VALUES ('$firstname','$lastname','$email')";
        
        $stmt = $db->stmt_init(); //New line

        if (! $stmt->prepare($sql)){ //New line
            die("SQL error: " . $db->error); //New line
        }//New line
/*$stmt->bind_param("sss", $_POST["username"], $_POST["password-hash"], $_POST["email"], $_POST["roleid"]); //New line

$stmt->execute(); //New line*/
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