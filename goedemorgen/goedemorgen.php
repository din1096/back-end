<body>
    <?php
    date_default_timezone_set('Europe/Amsterdam');
    $vandaag =  date("H:i");
    $tijd = date('H');

    echo "<div id ='output'>";

    if ($tijd <= '12' && $tijd > '6') {
        echo 'goede morgen!';
        $url = 'morning.png';
    } elseif ($tijd <= '18' && $tijd > '12') {
        echo 'goede middag';
        $url = 'afternoon.png';
    } elseif ($tijd <= '24' && $tijd > '18') {
       echo'goede avond';
        $url = 'evening.png';
    } elseif ($tijd <= '6') {
        echo 'goede nacht';
        $url = 'night.png';
    }
    '</div>';
    echo "<div id = 'vandaag'>";
    echo 'het is nu';
    echo $vandaag;
    '</div>';

    ?>

</body>

<style>
    body {
        background-image: url('<?php echo $url?>');
        background-repeat: no-repeat;
        background-size: cover;
    }
    #output {
    font-family: 'pacifico', cursive;
    color: white;
    position: relative;
    font-size: 200%;
    width: 250px;
    left: 44%;
    top: 250px;

}

</style>

</htlm>