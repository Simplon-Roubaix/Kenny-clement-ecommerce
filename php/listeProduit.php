
<?php  
include "php/tableauProduit.php";
 

	foreach($produits as $name => $element)

{

    // print_r($element) . '<br />';
    echo $element['name'] . '<br />';

}


?>






