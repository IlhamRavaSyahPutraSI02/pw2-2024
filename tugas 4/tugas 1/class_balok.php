<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($p, $l, $t) {
		        $this->panjang = $p;
		        $this->lebar = $l;
		        $this->tinggi = $t;
        }
        
        public function getLuas() {
            // luas = 2 × (pl + lt + pt)
            return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
		}
    
        public function getKeliling() {
            // keliling = 4(p+l+t)
            return 4 * ($this->panjang + $this->lebar + $this->tinggi);
        }
    
        public function getVolume() {
            // volume = p x l x t
            return $this->panjang *$this->lebar *$this->tinggi;
        }
    }
?>