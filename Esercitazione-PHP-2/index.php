<?php

// ALT + SHIFT + A


class Company {

    public $name;
    public $state;
    public $employees;
    public static $total = 0;

    public function __construct($name, $state, $employees = 0) {

        $this->name = $name;
        $this->state = $state;
        $this->employees = $employees;
        $this->spese();
        $tot = $this->employees * (1500 * 12); 
        self::$total += $tot;

    }

    public function stampa() {

        if($this->employees >= 1) {

            echo "L'ufficio $this->name con sede in $this->state ha ben $this->employees dipendenti.\n";

        } else {

            echo "L’ufficio $this->name con sede in $this->state non ha dipendenti.\n";

        }

    }

    public function spese() { 

        $tot = $this->employees * (1500 * 12); 

        echo "Il costo annuale dell'Ufficio $this->name è di $tot Euro.\n";

    }

    public static function GetTotal() {

        return self::$total;

    }
    

}


$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA');
$company3 = new Company('Nintendo', 'JAP', 5);
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);
//var_dump($company1);


// $company1->stampa();
// $company2->stampa();
// $company3->stampa();
// $company4->stampa();
// $company5->stampa();

// $company1->spese();
// $company2->spese();
// $company3->spese();
// $company4->spese();
// $company5->spese();

$total = Company::GetTotal();
echo "Il costo annualle di tutte le compagnie è $total";


//ESERCIZIO EXTRA


/* - Definisco una variabile contatore a 0 (per sommare le vocali di volta in volta);
- Leggo la parola in input da terminale;
- Inserisco la parola appena inserita in un ciclo,  devo controllare ogni lettera singolarmente;
    - Faccio contatore + 1 se la lettere in questione è uguale a: a OPPURE e OPPURE i OPPURE o OPPURE u;
    - Altrimenti non faccio nulla;
- Infine stampo una echo con la variabile contatore finale. */



// $testo = readline('Inserisci una parola: ');

// ConteggioVocali($testo);

/* for ($i=0; $i < strlen($testo) ; $i++) { 
    
    if($testo[$i] == 'a' || $testo[$i] == 'e' || $testo[$i] == 'i' || $testo[$i] == 'o' || $testo[$i] == 'u') {
        
        $contatore++;

    }

}

echo "$testo = Nella parola $testo ci sono $contatore vocale!"; */

// function ConteggioVocali($stringa) {

//     $contatore = 0;
//     $array = ['a', 'e', 'i', 'o', 'u'];

//     for ($i=0; $i < strlen($stringa) ; $i++) { 
    
//         if (in_array($stringa[$i], $array)) {

//             $contatore++;

//         }

//     }

//     echo "Nella parola $stringa ci sono $contatore vocale!";

// }