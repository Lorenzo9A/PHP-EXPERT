<?php
 
class lamp{
$merk;
$kleur;
$inhoudTank;
}


 
    $peugeot = newScooter();
    $peugeot->merk = 'peugeot',;
    $peugeot->kleur = 'zwart',;
    $peugeot->inhoudTank = '7',;
    $peugeot->checkInhoud();
 
    $piago = newScooter();
    $piago->merk = 'piago',;
    $piago->kleur = 'rood',;
    $piago->inhoudTank = '6',;
    $piago->checkInhoud();

functioncheckInhoud(){ 
if($this->inhoudTank == 0){
echo'De tank is leeg!'
            }
else{
echo'de tank is niet leeg!';
        }
    }

?>