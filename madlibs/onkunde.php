<?php
$fout1 = $fout2 = $fout3 = $fout4 = $fout5 = $fout6 = $fout7 = "";
$p1 = $p2 = $p3 = $p4 = $p5 = $p6 = $p7 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = false;
    foreach($_POST as $key => $value){
        if(empty($value)){
            $errors = true;
            echo "Andwoord " . $key . " is required.<br>";
        }
    }
    if($errors){
        echo "full alle velden in.";
    }
}
 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
 
if (isset($_POST['submit']) && !$errors){
    echo "Er zijn veel mensen die niet kunnen " . $_POST["p1"] . ". Mensen zoals " . $_POST["p2"] . ". Zelfs met de hulp van een " . $_POST["p4"] . " of zelfs " . $_POST["p3"] . " kan " . $_POST["p2"] . " niet " . $_POST["p1"] . ". Dit heeft niet te maken met gebrek aan " . $_POST["p5"] . ", maar met een te veel aan " . $_POST["p6"] . ". Te veel " . $_POST["p6"] . " leidt tot " . $_POST["p7"] . " en dat is niet goed als je wilt " . $_POST["p1"] . ". Helaas voor " . $_POST["p2"] . ".";
}
?>
 
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Mad Libs</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body class="background">
    <h1 class="text">Mad Libs</h1>
 
 
    <form class="tekst" method="post" action="">  
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
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>