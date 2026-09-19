<?php

require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO courses (title, description)
            VALUES ('$title', '$description')";

    if ($conn->query($sql)) {
        header("Location: courses.php");
        exit;
    }

}

?>

<!DOCTYPE html>
<html lang="kk">

<head>
    <meta charset="UTF-8">
    <title>Курс қосу</title>
</head>

<body>

<h1>Курс қосу</h1>

<form method="POST">

    <label>Курс атауы:</label>
    <br>

    <input type="text" name="title" required>

    <br><br>

    <label>Сипаттамасы:</label>
    <br>

    <textarea name="description"></textarea>

    <br><br>

    <button type="submit">
        Қосу
    </button>

</form>

</body>
</html>