<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "intervcomments";


$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = "SELECT author, comment, created_at FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='card mb-2'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . htmlspecialchars($row["author"]) . "</h5>";
            echo "<p class='card-text'>" . nl2br(htmlspecialchars($row["comment"])) . "</p>";
            echo "<p class='card-text'><small class='text-muted'>" . $row["created_at"] . "</small></p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>Нет комментариев.</p>";
    }
} else {
    echo "<div class='alert alert-danger'>Ошибка выполнения запроса: " . $conn->error . "</div>";
}

$conn->close();
?>