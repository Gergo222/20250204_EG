<?php
    //Változók
    echo "<br> Helló world";
    $valtozo1 = 1;
    $valtozo1 = "qwe";
    $valtozo1 = false;

    if($valtozo1 === false){
        echo "<br> Változó hamis";
    }else{
        echo "<br> Változo igaz";
    }

    for ($i=0; $i < 10; $i++) { 
        echo "<br> i: $i";
    }

    //Tömbök
    $tomb1 = array(1,2,3,4,5,6);
    $tomb2 = ["első elem", true, 13, "negyedik elem"];

    echo "<br> <pre>";
    var_dump($tomb1);
    var_dump($tomb2);

    //Függvények
    function fuggveny(int $a, int $b): int
    {
        return $a + $b;
    }
    echo fuggveny(10, 12);

    //Osztály hívás
    include_once 'Car.php';

    $auto = new Car("Ford", "Barna", 2019);
    $auto->szin = "Piros";
    $auto->setMarka ("Skoda");
    $auto->AddModal("Super-B");
    var_dump($auto);

    include_once 'SportCar.php';
    $sportcar = new SportCar("Ford", "Barna", 2020);
    $sportcar->setKobcenti(5000);
    var_dump($sportcar);
    echo "A sport auto színe: ". $sportcar->szin; 
    echo "<br>A sport auto köbcentije: ". $sportcar->getKobcenti();

    echo"<br>Új köbcenti: ". $sportcar->setKobcenti(2000)->getKobcenti();
