<?php

class Vehicle{
    protected $type;
    protected $fuel;

    protected function __construct($type,$fuel){
        $this->type = $type;
        $this->fuel = $fuel;
    }

    protected function getInfo(){
        echo 'Jenis Kendaraan: '. $this->type. '<br>';
        echo 'Bahan Bakar: '. $this->fuel. '<br>';
    }
}

class Motor extends Vehicle{
    public $wheels;

    public function __construct($type,$fuel,$wheels){
        parent::__construct($type,$fuel);
        $this->wheels = $wheels;
    }

    public function getInfoMotor(){
        parent::getInfo();
        echo 'Jumlah Roda:'. $this->wheels. '<br>';
    }

}

class submarine extends Vehicle{
    public $max_depth;

    public function __construct($type,$fuel,$max_depth){
        parent::__construct($type,$fuel);
        $this->max_depth = $max_depth;
    }

    public function getInfoSubmarine(){
        parent::getInfo();
        echo 'Maksimal kedalaman:'. $this->max_depth . '<br>';
    }
   
}


// $motor = new Motor ('Motor','Bensin', 2);
// $motor->getInfoMotor();
// $submarine = new Submarine ('Kapal selam','Bensin', 400);
// $submarine->getInfoSubmarine();


?>