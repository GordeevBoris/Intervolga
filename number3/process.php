<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "intervcomments";


$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = $conn->real_escape_string($_POST["author"]);
    $comment = $conn->real_escape_string($_POST["comment"]);

    $sql = "INSERT INTO comments (author, comment) VALUES ('$author', '$comment')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Ошибка добавления комментария: " . $conn->error . "</div>";
    }
}

$conn->close();
?>