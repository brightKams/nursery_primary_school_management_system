<?php
    $servername = "localhost";
    $dbname='groupk';
    $username = "root";
    $password = "";
    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($db->connect_error) 
    {
        die("Connection failed: " . $db->connect_error);
    }

    return $db;
   //New line starts here
/*public statis function userName($id)
{
    $session=loginlogout::connect()->prepare("SELECT firstname from users where id=:id");
    $session->bindValue(':id',$id);
    $session->execute();
    $fetch=$session->fetch(PDO::FETCH_ASSOC);
    return $fetch;

}
*/
?>