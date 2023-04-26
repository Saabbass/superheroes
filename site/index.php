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
    <title>superheroes</title>
</head>

<body>

    <!-- Hier komen alle superheroes -->
    <?php foreach ($all_heroes as $user) : ?>
        <p><?php echo $user["ID"] ?></p>
        <p><?php echo $user["Title"] ?></p>
        <p><?php echo $user["Alignment"] ?></p>
        <p><?php echo $user["Gender"] ?></p>
        <p><?php echo $user["Height"] ?></p>
        <p><?php echo $user["Weight"] ?></p>
        <p><?php echo $user["Identity"] ?></p>
        <p><?php echo $user["MaritalStatus"] ?></p>
        <p><?php echo $user["Eyes"] ?></p>
        <p><?php echo $user["Hair"] ?></p>
        <p><?php echo $user["PlaceOfBirth"] ?></p>
        <p><?php echo $user["PlaceOfDeath"] ?></p>
        <p><?php echo $user["Citizenship"] ?></p>
        <p><?php echo $user["Occupation"] ?></p>
    <?php endforeach; ?>

</body>

</html>