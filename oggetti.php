<?php

// Classe astratta Calciatore
abstract class Calciatore {
    public $cognome;
    public $numero;

    // Costruttore
    public function __construct($cognome, $numero) {
        $this->cognome = $cognome;
        $this->numero = $numero;
    }

    // Metodi astratti
    public abstract function giocata();

    // Metodo comune per fallo
    public function fallo() {
        $cartellino = rand(1, 3);

        echo "Il giocatore {$this->cognome} (n°{$this->numero}) ha commesso un fallo. ";

        if ($cartellino == 1) {
            echo "Nessun cartellino.<br>";
        } else if ($cartellino == 2) {
            echo "Cartellino giallo!<br>";
        } else {
            echo "Cartellino rosso!<br>";
        }
    }
}

// Classe Portiere
class Portiere extends Calciatore {
    public function giocata() {
        $random = rand(1, 2);
        if ($random == 1) {
            echo "Grande parata di {$this->cognome}!<br>";
        } else {
            echo "{$this->cognome} ha subito un gol.<br>";
        }
    }
}

// Classe Difensore
class Difensore extends Calciatore {
    public function giocata() {
        $random = rand(1, 2);
        if ($random == 1) {
            echo "{$this->cognome} ha fatto un grande intervento difensivo.<br>";
        } else {
            echo "{$this->cognome} ha perso l’uomo e l’attaccante è passato.<br>";
        }
    }
}

// Classe Centrocampista
class Centrocampista extends Calciatore {
    public function giocata() {
        $random = rand(1, 2);
        if ($random == 1) {
            echo "{$this->cognome} ha fatto un ottimo passaggio filtrante.<br>";
        } else {
            echo "{$this->cognome} ha perso palla a centrocampo.<br>";
        }
    }
}

// Classe Attaccante
class Attaccante extends Calciatore {
    public function giocata() {
        $random = rand(1, 2);
        if ($random == 1) {
            echo "Gol spettacolare di {$this->cognome}!<br>";
        } else {
            echo "{$this->cognome} ha sbagliato clamorosamente sotto porta.<br>";
        }
    }
}

$portiere = new Portiere("Buffon", 1);
$difensore = new Difensore("Chiellini", 5);
$centrocampista = new Centrocampista("Pirlo", 8);
$attaccante = new Attaccante("Tevez", 9);

// Simulazione giocate
$portiere->giocata();
$difensore->giocata();
$centrocampista->giocata();
$attaccante->giocata();

// Simulazione falli
$portiere->fallo();
$difensore->fallo();
$centrocampista->fallo();
$attaccante->fallo();

?>
