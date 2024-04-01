<?php

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$mysqli = require_DIR_ . "/database.php"; //database.php file developed in the previous video. Need to search and watch the video too

$sql = "UPDATE Users 
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

$stmt = $mysqli -> prepare($sql);

$stmt->bind_param("SSS", $token_hash, $expiry, $email);

$stmt -> execute();

//IF ($mysqli -> affected_rows){
  //  Continue the youtube video guide here: https://youtu.be/R9bfts9ZFjs
//}