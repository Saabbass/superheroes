<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM superheroes";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_heroes = mysqli_fetch_all($result, MYSQLI_ASSOC);

/**
 * Hier loop (iterate) je over alle waardes die gevonden zijn.
 * Je kunt zoals je zien paragraaf-tags gebruiken
 * maar je kunt ook andere HTML-**tags** gebruiken
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>superheroes</title>
</head>

<body>

    <!-- Hier komen alle superheroes -->
        <table>
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Alignment</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Identity</th>
                <th>MaritalStatus</th>
                <th>Eyes</th>
                <th>Hair</th>
                <th>PlaceOfBirth</th>
                <th>PlaceOfDeath</th>
                <th>Citizenship</th>
                <th>Occupation</th>
            </thead>
            <?php foreach ($all_heroes as $user) : ?>
            <tbody>
                <td><?php echo $user["ID"] ?></td>
                <td><?php echo $user["Title"] ?></td>
                <td><?php echo $user["Alignment"] ?></td>
                <td><?php echo $user["Gender"] ?></td>
                <td><?php echo $user["Height"] ?></td>
                <td><?php echo $user["Weight"] ?></td>
                <td><?php echo $user["Identity"] ?></td>
                <td><?php echo $user["MaritalStatus"] ?></td>
                <td><?php echo $user["Eyes"] ?></td>
                <td><?php echo $user["Hair"] ?></td>
                <td><?php echo $user["PlaceOfBirth"] ?></td>
                <td><?php echo $user["PlaceOfDeath"] ?></td>
                <td><?php echo $user["Citizenship"] ?></td>
                <td><?php echo $user["Occupation"] ?></td>
            </tbody>
            <?php endforeach; ?>
        </table>

</body>

</html>