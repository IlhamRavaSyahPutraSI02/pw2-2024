<?php

    require_once 'class_lingkaran.php';

    echo 'Nilai PHI =' . Lingkaran::PHI;

    $lingkaran1 = new Lingkaran(8);
    $lingkaran2 = new Lingkaran(27);

    // luas
    echo '<br><br>';
    echo '<br> Luas lingkaran 1 adalah  ' . $lingkaran1->getLuas(). 'cm';
    echo '<br> Luas lingkaran 2 adalah  ' . $lingkaran2->getLuas(). 'cm';

    // keliling
    echo '<br><br>';
    echo '<br> Keliling lingkaran 1 adalah  ' . $lingkaran1->getKeliling(). 'cm';
    echo '<br> Keliling lingkaran 2 adalah  ' . $lingkaran2->getKeliling(). 'cm';

?>
