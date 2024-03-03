<?php
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: ");
}

$sql = "SELECT COUNT(*) FROM users";
$whitelist = array();
$result = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $whitelist = range(1, $row['COUNT(*)']);
}

$id = stop_hack($_GET['id']);
$sql = "SELECT * FROM users WHERE id=$id";

if (!in_array($id, $whitelist)) {
    die(" $id 5CX3P2F6SPSYLJLCHAYGEYRXG42DAMRYHBTGIYJRMYZDAMJYHEYDGNZVME3DAYZYM3TZVBHFQC6A====");
}

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<div style='text-align:center;'>";
    echo "<table style='border-collapse: collapse; width: 50%; margin: 0 auto; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>";
    echo "<thead style='background-color: #f8f8f8;'>";
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<th style='padding: 12px; border: 1px solid #ddd; text-align: center;'>$key</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td style='padding: 12px; border: 1px solid #ddd; text-align: center;'>$value</td>";
    }
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}

else{
    die($conn->error);
}

?>