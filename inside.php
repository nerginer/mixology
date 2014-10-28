<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require("class_cocktail.php");
//$id = $_GET['cocktail_id'];

//$mycocktail=new Cocktail($id);
//echo $mycocktail->name;

 function retrunInside($cocktailId) {
 $mycocktail=new Cocktail($cocktailId);
 
 echo ('<center>
        <div class="post">
            <table border="0">
                <tr>
                    <th colspan="2">
                        <center>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">'. $mycocktail->name.'	</h3>
                                </div>
                            </div>
                        </center>
                    </th>
                </tr>

                <tr>
                    <td style="width:400px">
                      <div class="panel panel-primary">
                       <div class="panel-heading">
                                <h3 class="panel-title">image</h3>
                       </div>
                       <div class="panel-body">
                                <img  src="'. $mycocktail->imageBig.'" width="400" height="470"></td>
                       </div>

                    <td style="width:400px">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">The Ingredients</h3>
                            </div>

                               <div class="panel-body">
	                                <div class="list-group">
	                                    <a href="#" class="list-group-item">Kakula<span class="badge">40 ml</span></a>
	                                    <a href="#" class="list-group-item">Votka<span class="badge">10 ml</span></a>
	
	                                </div>
	                            </div>

                        </div>
                        
                        <div class="panel panel-primary">
	                            <div class="panel-heading">
	                                <h3 class="panel-title">Instractions</h3>
	                            </div>
	
	                            <div class="panel-body">
	                                <p>
		                                
		                                Anlatim buraya gelir limonu ince ince kes buz miktari cok onemlidir yaklasik 3 kup olmali yaklasik dedigime bakma tam 3 kup buz konmalidir bardak buzla iyice sogutulup
	                                </p>
	                            </div>
	              </div>

                        
                    </td>
                </tr>

                <tr>
                
                
                
                
                  
                </tr>
            </table>
        </div>
    </center>
');
 
 $mycocktail= null;
 }

?>  

	    
   
    