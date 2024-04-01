<?php
include("connection.php"); //Establishing connection with our database
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        //$sql="SELECT userid FROM users WHERE username='$username' and password='$password'";
        //$sql="SELECT u.userid,r.roleid,r.Description FROM users u, roles r WHERE u.roleid=r.roleid and u.username='$username' and u.password='$password'";
        $sql="SELECT roleid, status FROM users WHERE username='$username' and password='$password'";

        $result=mysqli_query($db,$sql);

        $row=mysqli_fetch_array($result);

        if(mysqli_num_rows($result) == 1 && $row["roleid"]=="1" && $row["status"]=="1")
        //if(mysqli_num_rows($result) == 1 && $row["Description"]=="Administrator")
        {
            //header("location: hom.php"); // Redirecting To another Page
            header("location: AdminPage.php"); // Redirecting To another Page
        }
        elseif(mysqli_num_rows($result) == 1 && $row["roleid"]=="2" && $row["status"]=="1")
        {
            //header("location: parentPage.php"); // Redirecting To another Page
            header("location: profile-update.html"); // Redirecting To another Page
        } 
        elseif(mysqli_num_rows($result) == 1 && $row["roleid"]=="" && $row["status"]=="1")
        {
            //header("location: hom.php"); // Redirecting To another Page
            echo "User account has no role asigned. Please contact Admin for help via: groupK_cmm004@rgu.ac.uk";
        } 
        elseif(mysqli_num_rows($result) == 1 && $row["roleid"]!=="" && $row["status"]!=="1")
        {
            //header("location: hom.php"); // Redirecting To another Page
            echo "User account either has no role asigned or user account is not active. Please contact Admin for help via: groupK_cmm004@rgu.ac.uk";
        } 
        else
        {
            echo "Incorrect username or password.";
        }
    }
?>