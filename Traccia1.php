<?php
 
 $users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' =>
    'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' =>
    'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'N']
 ];


 foreach($users as $elemento) {
     if($elemento['gender']=="M"){
echo "Buongiorno Sig." ." ".$elemento["name"]." ".$elemento["surname"]." ";
     }
     else if ($elemento['gender']=="F"){
        echo "Buongiorno Sig.na" ." ".$elemento["name"]." ".$elemento["surname"]." ";

     }
     else  {
        echo "Buongiorno Signor" ." ".$elemento["name"]." ".$elemento["surname"]." ";

     }
    }

    foreach($users as $elemento) {
switch ($elemento["gender"]){
    case "M":
echo "Buongiorno Sig." ." ".$elemento["name"]." ".$elemento["surname"]." ";
break;
case "F":
    echo "Buongiorno Sig.na" ." ".$elemento["name"]." ".$elemento["surname"]." ";
    break;

default:
echo "Buongiorno Signor" ." ".$elemento["name"]." ".$elemento["surname"]." ";


     }




    }


