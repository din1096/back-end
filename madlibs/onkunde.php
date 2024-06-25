<?php
        $fout1 = $fout2 = $fout3 = $fout4 = $fout5 = $fout6 = $fout7 = "";
        $p1 = $p2 = $p3 = $p4 = $p5 = $p6 = $p7 = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            foreach($_POST as $key => $value){
                if(empty($key)) echo"answer is required";
            }
        
        }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            if (isset($_POST['submit'])){
    Er zijn veel mensen die niet kunnen <?php echo $_POST["p1"]; ?>.
    Mensen zoals <?php echo $_POST["p2"]; ?>.
    zelfs met de hulp van een <?php echo $_POST["p4"]; ?> of zelfs 
    <?php echo $_POST["p3"]; ?> kan <?php echo $_POST["p2"]; ?> niet <?php echo $_POST["p1"]; ?>.
    Dit heeft niet te maken met gebrek aan <?php echo $_POST["p5"]; ?>, maar met een te veel aan 
    <?php echo $_POST["p6"]; ?>. Te veel <?php echo $_POST["p6"]; ?> leidt tot <?php echo $_POST["p7"]; ?> en dat is niet goed als je wilt 
    <?php echo $_POST["p1"]; ?>. Helaas voor <?php echo $_POST["p2"]; ?>.
                <footer>© dinho hooi - 2023</footer>
            }
            ?>

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

            
              
                


        
    </body>
</head>