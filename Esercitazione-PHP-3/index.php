<?php

// class Continent
// {
//     public $nameContinent;

//     public function __construct($continent)
//     {
//         $this->nameContinent = $continent;
//     }
// }

// class Country extends Continent
// {
//     public $nameCountry;

//     public function __construct($continent, $country)
//     {
//         parent::__construct($continent);
//         $this->nameCountry = $country;
//     }
// }

// class Region extends Country
// {
//     public $nameRegion;

//     public function __construct($continent, $country, $region)
//     {
//         parent::__construct($continent, $country);
//         $this->nameRegion = $region;
//     }
// }

// class Province extends Region
// {
//     public $nameProvince;

//     public function __construct($continent, $country, $region, $province)
//     {
//         parent::__construct($continent, $country, $region);
//         $this->nameProvince = $province;
//     }
// }

// class City extends Province
// {
//     public $nameCity;

//     public function __construct($continent, $country, $region, $province, $city)
//     {
//         parent::__construct($continent, $country, $region, $province);
//         $this->nameCity = $city;
//     }
// }

// class Street extends City
// {
//     public $nameStreet;

//     public function __construct($continent, $country, $region, $province, $city, $street)
//     {
//         parent::__construct($continent, $country, $region, $province, $city);
//         $this->nameStreet = $street;
//     }

//     public function getLocation(){
//         return "Mi trovo in {$this->nameContinent}, {$this->nameCountry}, {$this->nameRegion}, {$this->nameProvince}, {$this->nameCity}, {$this->nameStreet}.";
//     }
// }

// $myLocation = new Street('Europa', 'Italia', 'Puglia', 'Bari', 'Monopoli', 'Via Roma');

// echo $myLocation->getLocation();



class Vertebrates
{
    public function __construct()
    {
        $this->vertebrato();
    }
    protected function vertebrato() {
        echo "Sono un animale vertebrato \n";
    }
}

class Warmblooded extends Vertebrates
{
    public function __construct()
    {
        parent::__construct();
        $this->freddo();
    }
    protected function freddo() {
        echo "Sono un animale a sangue freddo \n";
    }
}

class Mammals extends Warmblooded
{
    public function __construct()
    {
        parent::__construct();
        $this->mammifero();
    }
    protected function mammifero() {
        echo "Sono un mammifero \n";
    }
}

class Birds extends Warmblooded
{
    public function __construct()
    {
        parent::__construct();
        $this->uccello();
    }
    protected function uccello() {
        echo "Sono un uccello \n";
    }
}

class Cooldblooded extends Vertebrates
{
    public function __construct()
    {
        parent::__construct();
        $this->sanguecaldo();
    }
    protected function sanguecaldo() {
        echo "Sono un animale a sanguefreddo \n";
    }
}

class Reptiles extends Cooldblooded
{
    public function __construct()
    {
        parent::__construct();
        $this->rettile();
    }
    protected function rettile() {
        echo "Sono un rettile \n";
    }
}

class Amphibians extends Cooldblooded
{
    public function __construct()
    {
        parent::__construct();
        $this->anfibio();
    }
    protected function anfibio() {
        echo "Sono un anfibio \n";
    }
}

class Fish extends Cooldblooded
{
    public function __construct()
    {
        parent::__construct();
        $this->pesce();
    }
    protected function pesce() {
        echo "Sono un pesce \n";
    }
}


$magikarp = new Fish();