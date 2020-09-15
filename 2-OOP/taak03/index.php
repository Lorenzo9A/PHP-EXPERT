<?php

class product{
 public $merk;
  public $prijs;
  public $type;
    public $kleur;
}

$dwijl = new product(); 

$stofzuiger = new product();

$dwijl->merk = 'hema';
$dwijl->prijs = 10;
$dwijl->type = "lang";
$dwijl->kleur = 'rood';
echo $dwijl->merk;
echo "<br>";
echo $dwijl->prijs;
echo "<br>";
echo $dwijl->type;
echo "<br>";
echo $dwijl->kleur;
echo "<br>";
echo "<br>";

$stofzuiger->merk = 'aegon';
$stofzuiger->prijs = 50;
$stofzuiger->type = "gfs505";
$stofzuiger->kleur = 'grijs';
echo $stofzuiger->merk;
echo "<br>";
echo $stofzuiger->prijs;
echo "<br>";
echo $stofzuiger->type;
echo "<br>";
echo $stofzuiger->kleur;

?>