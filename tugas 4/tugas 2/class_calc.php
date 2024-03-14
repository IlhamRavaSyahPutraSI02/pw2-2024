<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        private $bilangan1;
        private $bilangan2;

        public function __construct($bil1,$bil2) {
		        $this->bilangan1 = $bil1;
		        $this->bilangan2 = $bil2;
        }
        // Method lainnya
        public function pertambahan() {
            return $this->bilangan1 + $this->bilangan2;
        }
        public function pengurangan() {
            return $this->bilangan1 - $this->bilangan2;
        }
        
        public function pembagian() {
            return $this->bilangan1 / $this->bilangan2;
        }
        public function perkalian() {
            return $this->bilangan1 * $this->bilangan2;
        }
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);

    echo 'Hasil pertambahan adalah  ' . $calculator->pertambahan(). 'cm';
    echo '<br> Hasil pengurangan adalah  ' . $calculator->pengurangan(). 'cm';
    echo '<br> Hasil pembagian adalah  ' . $calculator->pembagian(). 'cm';
    echo '<br> Hasil perkalian adalah  ' . $calculator->perkalian(). 'cm';
?>