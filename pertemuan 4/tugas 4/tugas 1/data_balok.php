<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

        require_once 'class_balok.php';
    
        $balok1 = new Balok(29,16,7);
        $balok2 = new Balok(1,2,3);
        $balok3 = new Balok(2,2,4);
        $balok4 = new Balok(10,10,10);
    
        echo ' Balok 1';
        // luas
        echo '<br>Luas Balok  adalah  ' . $balok1->getLuas(). 'cm';
        // keliling
        echo '<br> Keliling Balok adalah  ' . $balok1->getKeliling(). 'cm';
        // volume
        echo '<br> Volume Balok adalah  ' . $balok1->getVolume(). 'cm';

        echo ' <br><br>Balok 2';
        // luas
        echo '<br>Luas Balok  adalah  ' . $balok2->getLuas(). 'cm';
        // keliling
        echo '<br> Keliling Balok adalah  ' . $balok2->getKeliling(). 'cm';
        // volume
        echo '<br> Volume Balok adalah  ' . $balok2->getVolume(). 'cm';

        echo ' <br><br>Balok 3';
        // luas
        echo '<br>Luas Balok  adalah  ' . $balok3->getLuas(). 'cm';
        // keliling
        echo '<br> Keliling Balok adalah  ' . $balok3->getKeliling(). 'cm';
        // volume
        echo '<br> Volume Balok adalah  ' . $balok3->getVolume(). 'cm';

        echo ' <br><br>Balok 4';
        // luas
        echo '<br>Luas Balok  adalah  ' . $balok4->getLuas(). 'cm';
        // keliling
        echo '<br> Keliling Balok adalah  ' . $balok4->getKeliling(). 'cm';
        // volume
        echo '<br> Volume Balok adalah  ' . $balok4->getVolume(). 'cm';
    
?>