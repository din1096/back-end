<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Mad Libs</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body class="background">
    <h1 class ="text"> Mad Libs</h1>
        <ul>
        <li><a class="active" href="paniek.php">Er heerst paniek...</a></li>
        <li><a href="onkunde.php">Onkunde</a></li>
        </ul>
    <?php
    $fout1 = $fout2 = $fout3 = $fout4 = $fout5 = $fout6 = $fout7 = $fout8 = "";
    $p1 = $p2 = $p3 = $p4 = $p5 = $p6 = $p7 = $p8 = "";
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
        if (empty($_POST["p8"])) {
            $fout8 = "answer is required";
        } else {
            $p8 = test_input($_POST["p8"]);
        }
    }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
            <form  class="tekst" method="post" action="resultaatpaniek.php">  
            welke dier zou je nooit als huisdier willen? <input type="text" name="p1">
            <span>* <?php echo $fout1;?></span>
            <br><br>
            Wie is de belangrijkste persoon in je leven? <input type="text" name="p2">
            <span>* <?php echo $fout2;?></span>
            <br><br>
            In welke land zou je graag willen wonen? <input type="text" name="p3">
            <span>* <?php echo $fout3;?></span>
            <br><br>
            Wat doe je als je je verveelt?: <input type="text" name="p4">
            <span>* <?php echo $fout4;?></span>
            <br><br>
            Met welke speelgoed speelde je als kind het meest? <input type="text" name="p5">
            <span>* <?php echo $fout5;?></span>
            <br><br>
            Bij welke docent spijbel je het liefst? <input type="text" name="p6">
            <span>* <?php echo $fout6;?></span>
            <br><br>
            Als je €100.000,- had, wat zou je dan kopen? <input type="text" name="p7">
            <span>* <?php echo $fout7;?></span>
            <br><br> 
            Wat is je favoriete bezigheid? <input type="text" name="p8">
            <span>* <?php echo $fout8;?></span>
            <br><br>   
            <input type="submit" name="submit" value="submit"> 
            </form>
            <footer>© dinho hooi - 2023</footer>
</body>