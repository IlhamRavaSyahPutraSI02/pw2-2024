<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

        require_once 'class_balok.php';
    
        $balok = new Balok(29,16,7);
    
        // luas
        echo 'Luas Balok  adalah  ' . $balok->getLuas(). 'cm';
        // keliling
        echo '<br> Keliling Balok adalah  ' . $balok->getKeliling(). 'cm';
        // volume
        echo '<br> Volume Balok adalah  ' . $balok->getVolume(). 'cm';
    

?>