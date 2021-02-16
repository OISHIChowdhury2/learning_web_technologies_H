<?php
  $x='a';
  $a = array('a','b','c','d');
  for ($i=0; $i <count($a) ; $i++) { 
    if ($x==$a[$i]) {
    	   echo "Match Found";
    	    	break;

    	    if ($x!==$a[$i]) {
    	    	$i++;
    	    }
    	    //else{echo "No Match Found";}
         }
       
    }
?>