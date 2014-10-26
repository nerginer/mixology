<?php

/**
 * Class representing a Cocktail
 * Has methods to pull the cocktail information from the database
 * 
 */
 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
 // every page needs to start with these basic things

// I'm using a separate config file. so pull in those values

require("config.inc.php");
require("Database.class.php"); 

$db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE); //global db var

     

class Cocktail {
   
     public $id;

   
     public $name;


//     public $instructions;

     
     public $imageBig;

   
     public $ingredients=array();

     public $cocktailId;

   
     public function getCocktail($cocktailId) {
     
	     global $db;

	     $sql = 'select * from cocktails where id = '.$cocktailId.'';
	
	     $cocktail = $db->query_first($sql);
	     	
		 return $cocktail;

     }

     public function getCocktailIngredients($cocktailId) {
	  
	     global $db;
	  
	  	 $sql = "Select R.sipirit_id,SP.name, R.volume from `recipe` R left join `sipirits` SP on R.sipirit_id = 				SP.id where R.cocktail_id ='".$cocktailId."'";

	  	 $ingredients = $db->fetch_all_array($sql);

	  	 return $ingredients;

     }  
 

    function __construct($cocktailId) {
	  
	  global $db;
      $db->connect();
	  
	  $cocktail = $this->getCocktail($cocktailId,$db);

	  $this->id = $cocktail["id"];
	
	  $this->name = $cocktail["name"];
	
	  $this->imageBig = $cocktail["imagebig"];

	  // Get cocktail ingredients from database and assign
  	  $this->ingredients = $this->getCocktailIngredients($cocktailId);
 
    }
     
     
    function __destruct() {
       global $db;
       $db->close();
    }

}//class




?>