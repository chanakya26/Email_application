<?php


$mysqli = require __DIR__. "/database.php";

if($_POST["submit"]== "sent"){
    $sql = "INSERT INTO emails (sender, reciever, subject, message,status)
        VALUES (?, ?, ?,?,?)";
        
$stmt = $mysqli->stmt_init();

$stmt->prepare($sql);


$stmt->bind_param("sssss",
                  $_POST["sender"],
                  $_POST["reciever"],
                  $_POST["subject"],
                  $_POST["message"],
                  $_POST["submit"]);
            
if ($stmt->execute()) {

  
    echo "Task Successfully Executed";
    exit;
    
} else {
    echo "Task Failed";
    }
}

elseif($_POST["submit"] == "save") {
    $sql = "INSERT INTO emails (sender, reciever, subject, message,status)
        VALUES (?, ?, ?,?,?)";
        $stmt = $mysqli->stmt_init();
        $stmt->prepare($sql);
$stmt->bind_param("sssss",
                  $_POST["sender"],
                  $_POST["reciever"],
                  $_POST["subject"],
                  $_POST["message"],
                  $_POST["submit"]);
            
if ($stmt->execute()) {

    echo "Task Successfully Executed";
    exit;
    
} else {
   echo "Task Failed";
    }
}


else{
    echo "failed";
}