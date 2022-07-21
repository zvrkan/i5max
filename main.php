<?php
include "Smartphone.php";

$ma = readline("Unesite Marku mobitela: ");
$mo = readline("Unesite model mobitela: ");
$me = readline("Unesite memoriju mobitela: ");
$mr = readline("Unesite mrezu mobitela (4G/5G): ");

$nMob = new Smartphone($ma,$mo,$me,$mr);

echo $nMob->ispis();



?>