<?php
include("connection.php"); //Establishing connection with our database
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo "Both fields are required.";
    }
    else
    {
        $username=$_POST['username'];
        //$password=$_POST['password'];
        //$sql="SELECT userid FROM users WHERE username='$username' and password='$password'";
        //$sql="SELECT u.userid,r.roleid,r.Description FROM users u, roles r WHERE u.roleid=r.roleid and u.username='$username' and u.password='$password'";
        $sql="SELECT roleid, Accountstatus,password_hash FROM users WHERE username='$username' and password='$password'";

        $result=mysqli_query($db,$sql);

        $row=mysqli_fetch_array($result);
        if(mysqli_num_rows($result) == 1 && $row["roleid"]=="1" && $row["Accountstatus"]=="1" && password_verify($_POST["password"], $row["password_hash"]) )
        //if(mysqli_num_rows($result) == 1 && $row["roleid"]=="1" && $row["Accountstatus"]=="1" && password_verify($_POST["password"], $row["password_hash"]))
        //if(mysqli_num_rows($result) == 1 && $row["Description"]=="Administrator")
        {
            header("location: profile-update.php"); // Should Redirect to AdminPage.php
        }
        elseif(mysqli_num_rows($result) == 1 && $row["roleid"]=="2" && $row["Accountstatus"]=="1" && password_verify($_POST["password"], $row["password_hash"]))
        {
            header("location: profile-update.php"); // Should Redirecting To parentPage.php/UsersPage.php
        } 
        elseif(mysqli_num_rows($result) == 1 && $row["roleid"]=="" && $row["Accountstatus"]=="1" && password_verify($_POST["password"], $row["password_hash"]))
        {
            //No login granted if No roleID is asigned to active account
            echo "User account has no role asigned. Please contact Admin for help via: groupK_cmm004@rgu.ac.uk"; 
        } 
        elseif(mysqli_num_rows($result) == 1 && $row["roleid"]!=="" && $row["Accountstatus"]!=="1" && password_verify($_POST["password"], $row["password_hash"]))
        {
           //No login granted if roleid is not assigned and status is not active
            echo "User account either has no role asigned or user account is not active. Please contact Admin for help via: groupK_cmm004@rgu.ac.uk";
        } 
        else
        {
            echo "Incorrect username or password.";
        }
    }
?>