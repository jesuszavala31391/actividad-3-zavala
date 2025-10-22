<?php

$usernames = ["Alice", "", "Bob<script>", "Charlie", "  ", "Eve"];

$connection = mysqli_connect("localhost", "root", "", "userdb");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

foreach ($usernames as $username) {
    
    $cleanName = trim(strip_tags($username));

    if ($cleanName !== "") {
        $safeName = mysqli_real_escape_string($connection, $cleanName);
        $query = "INSERT INTO users (name) VALUES ('$safeName')";
        if (mysqli_query($connection, $query)) {
            echo "User '$safeName' inserted successfully.<br>";
        } else {
            echo "Error inserting '$safeName': " . mysqli_error($connection) . "<br>";
        }
    } else {
        echo "Invalid name skipped.<br>";
    }
}

mysqli_close($connection);
?>
