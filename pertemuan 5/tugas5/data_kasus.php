<?php

    require_once 'class_kasus.php';

    // object
    $goat= new Kambing('Kambing','Melahirkan','Herbivora');
    $lion= new Singa('Singa','Melahirkan','Karnivora');
    $duck= new Bebek('Bebek','Bertelur','Herbivora');

// echo
    echo "Info Hewan:<br>";
    $goat->getInfoKambing();
    echo"<br>";

    echo "Info Hewan:<br>";
    $lion->getInfoSapi();
    echo"<br>";

    echo "Info Hewan:<br>";
    $duck->getInfoBebek();
?>