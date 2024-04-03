<?php

$email = $_POST['email'];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

//$db = require _DIR_ . "/connection.php"; //database.php file developed in the previous video. Need to search and watch the video too

//$mysqli = require_DIR_ . "connection.php"; //database.php file developed in the previous video. Need to search and watch the video too
include('connection.php');

$sql = "UPDATE Users 
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

//$stmt = $mysqli -> prepare($sql);
$stmt = $db -> prepare($sql);


$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt -> execute();

if ($db->affected_rows){

   $mail = require __DIR__ . "/mailer.php";

   $mail->setFrom("noreply@gmail.com");
   $mail->addAddress($email);
   $mail->Subject = "Password Reset";
   $mail->Body = <<<END

   Click <a href="http://localhost:8080/GroupK/nursery_primary_school_management_system/reset-password.php?token=$token">here</a> to reset your password.
   //Click <a href="http://example.com/reset-password.php?token=$token">here</a> to reset your password.

   END;

   try {
$mail->send();

   } catch (Exception $e){
    echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";

   }

}

echo " Message sent, please check your inbox.";
//IF ($mysqli -> affected_rows){
  //  Continue the youtube video guide here: https://youtu.be/R9bfts9ZFjs
//}