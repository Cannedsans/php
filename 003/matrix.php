<?php

$matris = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "Interando matris.: <br>";

foreach ($matris as $linha) {
    foreach ($linha as $elemento) {
        echo $elemento . " ";
    }
    echo "<br>";
}
