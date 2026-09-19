<?php

require_once "config/database.php";

$sql = "SELECT * FROM courses";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="kk">

<head>
    <meta charset="UTF-8">
    <title>Курстар</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1> Курстар</h1>

    <nav>
        <a href="index.php">Басты бет</a>
        <a href="courses.php">Курстар</a>
    </nav>
</header>

<main>

<h2>Барлық курстар</h2>

<?php

if ($result->num_rows > 0) {

    while ($course = $result->fetch_assoc()) {

        echo "<h3>" . $course["title"] . "</h3>";

        echo "<p>" . $course["description"] . "</p>";

        echo "<hr>";
    }

} else {

    echo "<p>Әзірге курстар жоқ.</p>";

}

?>

</main>

</body>
</html>