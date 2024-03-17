<?php
include_once("db.php");

$sql = "SELECT id, title, content, created_at FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $news = array();
    while($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
    echo json_encode($news); 
} else {
    echo "No news available";
}
$conn->close();
?>
