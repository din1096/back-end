<!DOCTYPE html>
<html lang="nl">

<body>
    <?php
function gcd($numer1, $numer2) {
    if ($numer2 == 0)
      return $numer1;
    return gcd($numer2, $numer1%$numer2);
  }
  
  $numer1 = 8;
  $numer2 = 12;
  
  echo "GCD of $numer1 and $numer2 is: ".gcd($numer1,$numer2);
    ?>

</body>
</htlm>