<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
	<title>Задание 1</title>
    
</head>

<body>
<?php
$data = [
    ['Иванов', 'Математика', 5],
    ['Иванов', 'Математика', 4],
    ['Иванов', 'Математика', 5],
    ['Петров', 'Математика', 5],
    ['Сидоров', 'Физика', 4],
    ['Иванов', 'Физика', 4],
    ['Петров', 'Обж', 4],
];

$results = [];
foreach ($data as $row) {
    $student = $row[0];
    $subject = $row[1];
    $grade = $row[2];

    if (!isset($results[$student][$subject])) {
        $results[$student][$subject] = 0;
    }
    $results[$student][$subject] += $grade;
}

ksort($results);


echo "<table>";
echo "<tr><th>Ученик</th><th>Математика</th><th>Обж</th><th>Физика</th></tr>";
foreach ($results as $student => $subjects) {
    echo "<tr><td>$student</td>";

    echo "<td>";
    if (isset($subjects['Математика'])) {
        echo $subjects['Математика'];
    } else {
        echo 0;
    }
    echo "</td>";

    echo "<td>";
    if (isset($subjects['Обж'])) {
        echo $subjects['Обж'];
    } else {
        echo 0;
    }
    echo "</td>";

    echo "<td>";
    if (isset($subjects['Физика'])) {
        echo $subjects['Физика'];
    } else {
        echo 0;
    }
    echo "</td>";

    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>