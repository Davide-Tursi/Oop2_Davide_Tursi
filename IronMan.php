<?php

// Crea la tua armatura di Ironman seguendo il modello visto a lezione, seguendo i seguenti punti:
// metti ogni classe (abstract o no) in un file diverso, utilizzando nel file principale la funzione require()
// crea un esercito random di Ironman
// aggiungi un contatore di quanti Ironman hai creato
// Pushare su GitHub con nome php_14_nome_cognome 


abstract class BraccioDx{
    abstract public function attack();
}

abstract class BraccioSx{
    abstract public function defence();
}

abstract class Gambe{
    abstract public function move();
}

class PugnoDiLato extends BraccioDx{
    public function attack(){
        echo "Sbam\n";
    }
}

class SpecchioRiflesso extends BraccioSx{
    public function defence(){
        echo "Tiè\n";
    }
}

class Rotelle extends Gambe {
    public function move(){
        echo "Liscio come l'olio\n";
    }
}

class IronMan{
    public $attack;
    public $defence;
    public $move;

    public function __construct(BraccioDx $attack,BraccioSx $defence,Gambe $move){
        $this->attack=$attack;
        $this->defence=$defence;
        $this->move=$move;
    }
    public function attack(){
        $this->attack->attack();
    }
    public function defence(){
        $this->defence->defence();
    }
    public function move(){
        $this->move->move();
    }
}
