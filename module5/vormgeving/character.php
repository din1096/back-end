<?php
include 'database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM characters WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$character = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?php echo $character['name']; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $character['name']; ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $character['avatar']; ?>">
            <div class="stats" style="background-color: <?php echo $character['color']; ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $character['health']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $character['attack']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $character['defense']; ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $character['weapon']; ?></li>
                    <li><b>Armor</b>: <?php echo $character['armor']; ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p><?php echo ($character['bio']); ?></p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; [dinho hooi] 2024</footer>
</body>
</html>
