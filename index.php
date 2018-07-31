<?php
$number1 = 0;
$number2 = rand(0,100);
 ?>
 <!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice2</title>
   </head>
   <body>
<p>
<?php
//Incrémenter la première variable tant qu'elle n'est pas supérieure à 20
while($number1 < 20){
  echo $number1 * $number2 .'<br/>';
  $number1++;
}
 ?>
</p>
   </body>
 </html>
