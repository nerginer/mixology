<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require("class_cocktail.php");


echo "hehee <br>";




$mycocktail=new Cocktail(2);

$ingredients = $mycocktail->ingredients;

//var_dump($ingredients);

foreach($ingredients as $record){
    echo "$record[name]<br>";
}

?>

