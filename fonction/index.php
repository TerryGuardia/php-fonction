<?php

function coucou(string $name = "Maxime")
{
    echo "Hey $name!\n";
}

coucou();
coucou("Morgan");
coucou("Enzo");

echo "<br>";

function addition(int $a, int $b)
{
    echo $a + $b . "\n";
}
addition(2, 3);
addition(10, 6);
addition(5, 2);

echo "<br>";

function dateAujourdHui()
{
    date_default_timezone_set('Europe/Paris');
    $date = date('l j F Y');
    echo "Aujourd’hui, nous sommes le " . "<b>" . $date . "</b>";
}
dateAujourdHui();

echo "<br>";

function prixTtc(int $ht, int $taux = 20)
{
    $taux = 1 + $taux / 100;
    echo $ht * $taux . "\n";
}
prixTtc(100);
prixTtc(100, 10);
prixTtc(200, 35);

echo "<br>";

function Age(string $dateNaissance)
{
    $aujourdhui = date("d-m-Y");
    $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
    echo $diff->format('%y') . "\n";
}

age("25-08-1993");
age("02-01-1950");
age("15-12-2000");

echo "<br>";

function minuteBeforeEnd(string $endingTime)
{
    $currentTime = date('h:i:s');
    $diff = date_diff(date_create($endingTime), date_create($currentTime));
    echo $diff->format('%i') . "\n minutes restantes.";
}
minuteBeforeEnd("05:00:00");
echo "<br>";

function dayBeforeEnd()
{
    $date = date('w');
    if ($date === 6) {
        echo "c'est le Week-End.";
    } else {
        echo "Il reste " . 6 - $date . " jours avant le Week-End.";
    }
}
dayBeforeEnd();

echo "<br>";

function retourCoucou(string $name = "Maxime"): string
{
    return "Hey $name! \n";
}
retourCoucou();
echo retourCoucou("Pauline");
echo '<h1>' . retourCoucou() . '</h1>';
echo '<p>Et le voisin lui répondit : "' . retourCoucou("Kevin") . '"</p';

function suppEspace(string $phrase = "Ceci est une phrase par défaut.")
{

}
suppEspace();
echo suppEspace('Bonjour comment allez vous');
echo suppEspace('Je dois prendre le train de 17h33');
