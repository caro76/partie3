<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$table = [
    'janvier', 'février' , 'Mars' , 'Avril' , 'Mai'
     , 'Juin' , 'Juillet' , 'Aout' ,'Septembre' ,
      'Octobre' , 'Novembre' , 'Décembre'] ;
echo $table[5] ;
?> 
   <hr>
   <?php
$table = [
    'janvier', 'février' , 'Mars' , 'Avril' , 'Mai'
     , 'Juin' , 'Juillet' , 'Aout' ,'Septembre' ,
      'Octobre' , 'Novembre' , 'Décembre'] ;
foreach ($table as $month)
{
    ?>
     <p><?= $month; ?></p>
     <?php
}
   ?> 
   <hr>
   <?php
   $departement = array(
    02 => 'aisne',
    59 => 'nord',
    60 => 'oise',
    62 => 'pas de calais',
    80 => 'somme');
    foreach ($departement as $key => $nomDepart)
    {
        ?>
        <p><?= $nomDepart; ?></p>
        <?php
    }

 ?> 
 <hr>
 <?php
   $departement = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas de calais',
    80 => 'Somme'];
    foreach ($departement as $key => $nomDepart)
    {
        ?>
        <p>Le département <?= $nomDepart; ?> a le numéro <?= $key ?></p>
        <?php
    }

 ?> 

</body>
</html>