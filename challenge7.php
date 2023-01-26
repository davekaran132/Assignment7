<?php
include_once 'connection.php';
$database = new Database('127.0.0.1', 'root', 'root', 'CHALLENGES', '3306');


echo '
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>';
    $conn = $database->connect();

    $sql="SELECT *FROM STUDENTS;";
    $result = $conn->query($sql);
    echo "<table>";
    echo "<tr>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "</tr>";
    while( $row = $result->fetch_assoc() ) {
        echo "<tr>";
        echo "<td>".$row['FirstName']."</td>";
        echo "<td>".$row['LastName']."</td";
        echo "</tr>";

    }
    ?>

    </body>
    </html>