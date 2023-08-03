<?php

// ALT + SHIFT + A

/* $testo = readline('Inserisci importo da inserire');

const BUDGET = 1000;

var_dump($testo);

if ($testo <= BUDGET) {
    echo 'Paga in 3 comode rate da' . ' ' .round($testo / 3) . '€';
} else {
    echo 'Inserire un importo minore';
} */



$numeri = [10, 22, 33, 4, 55, 6, 7, 8, 9, 90, 67, 34];
$somma = 0;
$contatore = 0;

for($i = 0; $i < count($numeri); $i++){
    if(($numeri[$i] % 2) == 0){
        $contatore++;
        $somma = $numeri[$i] + $somma;
    }

}

echo "La media di tutti i numeri è: " . round($somma / $contatore);



/* $users = [
    [
      'name' => 'Marco', 
      'gender' => 'M',
    ],
    [
      'name' => 'Vanessa',
      'gender' => 'F',
    ],
    [
      'name' => 'Jack',
      'gender' => 'M',
    ],
    [
      'name' => 'Mari*',
      'gender' => '',
    ],
  ];


foreach ($users as $users_elenco){

    if($users_elenco['gender'] == 'F'){
        echo 'Buongiorno Sig.ra ' . $users_elenco['name'] . "\n";
    } else if ($users_elenco['gender'] == 'M'){
        echo 'Buongiorno Sig. ' . $users_elenco['name'] . "\n";
    } else {
        echo 'Buongiorno ' . $users_elenco['name'] . "\n";
    }
} */



/* $numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$somma = 0;

for($i = 0; $i < count($numeri); $i++){
    if(($numeri[$i] % 2) == 1){
        $contatore++;
        $somma = $numeri[$i] + $somma;
    }

}

echo "La media di tutti i numeri dispari è: " . $somma; */