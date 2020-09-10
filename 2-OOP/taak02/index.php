<?php

class auto{
  $merk;
  $kleur;
  $type;
  $uitvoering;
  $brandstof;
}

$nieuweAuto = new auto(); 

$nogEenNieuweAuto = new auto();

$merk->Merk = 'Tesla';
$kleur->Kleur = 'Rood';
$type->Type = 'Model 3';
$uitvoering->uitvoering = 'Cabrio';
$brandstof->brandstof= 'Elektrisch';
echo $merk->Merk;
echo $kleur->Kleur;
echo $type->Type;
echo $uitvoering->uitvoering;
echo $brandstof->brandstof;

?>