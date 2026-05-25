<?php
header("Content-Type: application/json");

$conn = mysqli_connect("localhost", "root", "", "sharlet_db");

if (!$conn) {
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

$products = [];

while ($row = mysqli_fetch_assoc($result)) {
    $row["sale"] = $row["sale"] == 1 ? true : false;
    $products[] = $row;
}

echo json_encode($products);
?>