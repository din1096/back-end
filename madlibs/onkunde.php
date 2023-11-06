<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Mad Libs</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<head>
    <body class="background">
        <h1 class ="text"> Mad Libs</h1>
            <ul>
            <li><a class="active" href="paniek.php">Er heerst paniek...</a></li>
            <li><a href="onkunde.php">Onkunde</a></li>
            </ul>
        <?php
        $fout1 = $fout2 = $fout3 = $fout4 = $fout5 = $fout6 = $fout7 = "";
        $p1 = $p2 = $p3 = $p4 = $p5 = $p6 = $p7 = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["p1"])) {
                $fout1 = "answer is required";
            } else {
                $p1 = test_input($_POST["p1"]);
            }
            if (empty($_POST["p2"])) {
                $fout2 = "answer is required";
            } else {
                $p2 = test_input($_POST["p2"]);
            }
            if (empty($_POST["p3"])) {
                $fout3 = "answer is required";
            } else {
                $p3 = test_input($_POST["p3"]);
            }
            if (empty($_POST["p4"])) {
                $fout4 = "answer is required";
            } else {
                $p4 = test_input($_POST["p4"]);
            }
            if (empty($_POST["p5"])) {
                $fout5 = "answer is required";
            } else {
                $p5 = test_input($_POST["p5"]);
            }
            if (empty($_POST["p6"])) {
                $fout6 = "answer is required";
            } else {
                $p6 = test_input($_POST["p6"]);
            }
            if (empty($_POST["p7"])) {
                $fout7 = "answer is required";
            } else {
                $p7 = test_input($_POST["p7"]);
            }
        }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
                <form  class="tekst" method="post" action="resultaatonkunde.php">  
                Wat zou je graag willen kunnen? <input type="text" name="p1">
                <span>* <?php echo $fout1;?></span>
                <br><br>
                Met welke persoon kun je goed opschieten? <input type="text" name="p2">
                <span>* <?php echo $fout2;?></span>
                <br><br>
                Wat is je favoriete getal? <input type="text" name="p3">
                <span>* <?php echo $fout3;?></span>
                <br><br>
                Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="p4">
                <span>* <?php echo $fout4;?></span>
                <br><br>
                Wat is je beste persoonlijke eigenschap? <input type="text" name="p5">
                <span>* <?php echo $fout5;?></span>
                <br><br>
                Wat is je slechtste persoonlijke eigenschap? <input type="text" name="p6">
                <span>* <?php echo $fout6;?></span>
                <br><br>
                Wat is het ergste wat je kan overkomen? <input type="text" name="p7">
                <span>* <?php echo $fout7;?></span>
                <br><br>    
                <input type="submit" name="submit" value="submit">  
                </form>
                <footer>© dinho hooi - 2023</footer>
    </body>
</head>