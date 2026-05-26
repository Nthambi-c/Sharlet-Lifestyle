<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "sharlet_db"
);

if(!$conn){
    die("Database connection failed");
}

?>