<?php
include 'database.php';

$sql = "SELECT * FROM characters ORDER BY NAME";
$stmt = $conn->prepare($sql);
$stmt->execute();
$characters = $stmt->fetchAll(PDO::FETCH_ASSOC);

$totalCharacters = count($characters)
?>


<!DOCTYPE html>
<head>
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo $totalCharacters; ?> characters uit de database</h1></header>
<div id="container">
    <?php foreach ($characters as $character): ?>
        <a class="item" href="character.php?id=<?php echo $character['id']; ?>">
            <div class="left">
                <img class="avatar" src="resources/images/<?php echo $character['avatar']; ?>">
            </div>
            <div class="right">
                <h2><?php echo $character['name']; ?></h2>
                <div class="stats">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $character['health']; ?></li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $character['attack']; ?></li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $character['defense']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
        </a>
    <?php endforeach; ?>
</div>
<footer>&copy; [dinho hooi] 2024</footer>
</body>
</html>