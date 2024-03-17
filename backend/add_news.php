<?php
include_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO news (title, content) VALUES ('$title', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo "News added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
