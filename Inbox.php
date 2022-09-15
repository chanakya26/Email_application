<?php
include_once 'database.php';
?>
<?php

$sql = "SELECT * FROM emails;";
$result = mysqli_query($mysqli,$sql);

echo"<br>";

while ($row=mysqli_fetch_assoc($result)){
    echo $row['sender']. $row['subject']. $row['message'];
    echo"<br>";

}
?>

