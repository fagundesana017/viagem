<?php

$peso = $_POST["peso"];
$altura = $_POST["altura"];
$calculo = $_POST["calculo"];


echo "<h4>Peso : ".$peso."</h4>";
echo "<h4>Altura : ".$altura."</h4><br>";


$calculo = $peso / ($altura * $altura);

echo "<h1>IMC: $calculo</h1>";

if ($calculo < 18.5)
{
    echo "<h2 style='color: red'>MAGREZA</h2>";
}
elseif ($calculo > 18.5 && $calculo < 24.5)
{
    echo "<h2 style='color: forestgreen'>NORMAL</h2>";
}
elseif ($calculo > 25 && $calculo < 29.9)
{
    echo "<h2 style='color: gold'>SOBREPESO</h2>";
}
elseif ($calculo > 30 && $calculo < 39.9)
{
    echo "<h2 style='color: darkorange'>OBSIDADE</h2>";
}
else
{
    echo "<h2 style='color: red'>OBSIDADE GRAVE</h2>";
}