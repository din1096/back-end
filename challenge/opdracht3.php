<!DOCTYPE html>
<html lang="nl">

<body>
    <?php
function sorteer_lijst(&$array, $start=0) {
    $eind = count($array)-1;
    while ($start < $eind) {
        [$array[$start],$array[$eind]] = [$array[$eind],$array[$start]];

        $start++; 
        $eind--;
    }
    return $array;
} 

$lijst = [1,2,3,4];
sorteer_lijst($lijst);
print_r($lijst);
    ?>

</body>
</htlm>