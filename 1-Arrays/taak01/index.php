<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
     
    
    <?php 
  
  $medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ]
  ];
  echo $medewerkers[0]['voornaam'];
  echo $medewerkers[0]['achternaam'];
  echo "is een" ;
   echo $medewerkers[0]['functie']; 
  echo "<br>";
  echo $medewerkers[1]['voornaam'];
  echo $medewerkers[1]['achternaam'];
  echo "is een" ;
   echo $medewerkers[1]['functie']; 

  
  ?>
    
  </body>
