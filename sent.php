<?php
include_once 'database.php';
?>
<?php

$sql = "SELECT * FROM emails Where status='sent';"; 
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr> "; 
    foreach ($row as $field => $value) {
        echo "<td> ". $value."</td>";
    }
    echo "</tr>";   

} 
    echo "</table>";
?>

