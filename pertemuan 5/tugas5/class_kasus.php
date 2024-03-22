<?php

class Ragunan{
    protected $name;
    protected $kembangbiak;

    protected function __construct($name,$kembangbiak){
        $this->name = $name;
        $this->kembangbiak = $kembangbiak;
    }

    protected function getInfo(){
        echo 'Nama Hewan: '. $this->name. '<br>';
        echo 'Berkembang biak dengan cara: '. $this->kembangbiak. '<br>';
    }
}

class Kambing extends Ragunan{
    public $food;

    public function __construct($name,$kembangbiak,$food){
        parent::__construct($name,$kembangbiak);
        $this->food = $food;
    }

    public function getInfoKambing(){
        parent::getInfo();
        echo 'Makannya adalah: '. $this->food. '<br>';
    }

}

class Singa extends Ragunan{
    public $food;

    public function __construct($name,$kembangbiak,$food){
        parent::__construct($name,$kembangbiak);
        $this->food = $food;
    }

    public function getInfoSapi(){
        parent::getInfo();
        echo 'Makannya adalah: '. $this->food. '<br>';
    }
   
}
class Bebek extends Ragunan{
    public $food;

    public function __construct($name,$kembangbiak,$food){
        parent::__construct($name,$kembangbiak);
        $this->food = $food;
    }

    public function getInfoBebek(){
        parent::getInfo();
        echo 'Makannya adalah: ' . $this->food. '<br>';
    }
   
}


?>