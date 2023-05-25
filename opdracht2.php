<!DOCTYPE html>
<html lang="nl">

<body>
    <?php
$woordenlijst = "kat hond olifant";
$words  = explode(' ', $woordenlijst);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
   if (strlen($word) > $longestWordLength) {
      $longestWordLength = strlen($word);
      $longestWord = $word;
   }
}

echo $longestWord;





    ?>

</body>
</htlm>