<!DOCTYPE html>
<html lang="nl">

<body>
    <?php
$woordenlijst = "kat hond olifant";
$words  = explode(' ', $woordenlijst);

$langstewoordlengte = 0;
$langstewoord = '';

foreach ($words as $word) {
   if (strlen($word) > $langstewoordlengte) {
      $langstewoordlengte = strlen($word);
      $langstewoord = $word;
   }
}

echo $langstewoord;
    ?>

</body>
</htlm>