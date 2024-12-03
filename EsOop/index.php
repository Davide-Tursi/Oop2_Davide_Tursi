<?php

//Traccia 1 
//Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente:
// +-|Continent
// +-----------|Country
// +--------------------|Region
// +---------------------------|Province
// +------------------------------------|City
// +------------------------------------------|Street
// Ogni classe avra' un attributo public del tipo:
// $nameContinent:
// $nameCountry;
// $nameRegion;
// $nameProvince;
// $nameCity;
// $nameStreet;
// La prima classe genitore avra' la seguente struttura:

// class Continent
// {
//   public $nameContinent;
//   public function __construct($continent)
//   {
//     $this->nameContinent = $continent;
//   }
// }
// Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“





// class Continent
// {
//     public $continent;

//     public function __construct($continent)
//     {
//         $this -> continent = $continent;
//     }
// }

// class Country extends Continent
// {
//     public $country;

//     public function __construct($continent, $country)
//     {
//         parent::__construct($continent);
//         $this -> country = $country;
//     }
// }

// class Region extends Country
// {
//     public $region;

//     public function __construct($continent, $country, $region)
//     {
//         parent::__construct($continent, $country);
//         $this -> region = $region;
//     }
// }

// class Province extends Region
// {
//     public $province;

//     public function __construct($continent, $country, $region, $province)
//     {
//         parent::__construct($continent, $country, $region);
//         $this -> province = $province;
//     }
// }

// class City extends Province
// {
//     public $city;

//     public function __construct($continent, $country, $region, $province, $city)
//     {
//         parent::__construct($continent, $country, $region, $province);
//         $this -> city = $city;
//     }
// }

// class Street extends City
// {
//     public $street;

//     public function __construct($continent, $country, $region, $province, $city, $street)
//     {
//         parent::__construct($continent, $country, $region, $province, $city);
//         $this -> street = $street;
//     }
// public function getMyCurrentLocation(){
//     echo "Mi trovo in $this->continent, $this->country, $this->region, $this->province, $this->city, $this->street";
// }
// }

// $myLocation = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");

// $myLocation->getmyCurrentLocation();
// print_r($myLocation);



// Traccia 2

// Data questo semplice schema di classificazione animale:
// crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:
// le classi non devono avere attributi;
// ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
// non puoi realizzare metodi definiti public per stampare il risultato;
// l’unico metodo public ammesso e' il costrutture.
// Il risultato atteso sara':

// $magikarp = new Fish();
// Nel terminale visaulizzerete:
// Sono un animale Vertebrato
// Sono un animale a Sangue Freddo
// Splash!


class Vertebrati {
    public function __construct() {
        $this->printClass();
    }

    protected function printClass() {
        echo "Sono un animale Vertebrato\n";
    }
}

class SangueFreddo extends Vertebrati {
    public function __construct() {
        parent::__construct();
        $this->freddo();
    }

    protected function freddo() {
        echo "Sono un animale a Sangue Freddo\n";
    }
}


class Anfibi extends SangueFreddo {
    public function __construct() {
        parent::__construct();
    }
}

class Rettili extends SangueFreddo {
    public function __construct() {
        parent::__construct();
    }
}

class Pesci extends SangueFreddo {
    public function __construct() {
        parent::__construct();
        $this->pesci();
    }

    protected function pesci() {
        echo "Splash!\n";
    }
}

$magikarp = new Pesci();