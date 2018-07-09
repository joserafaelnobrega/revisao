<?php
    $tabuada = $_REQUEST['tabuada'];
    for($i = 1; $i <10;$i++) {
    $mult = $tabuada*$i;
    echo "$tabuada x $i = $mult";
    echo '<br>';
    }

  