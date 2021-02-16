<?php
function rect_area($length = 4, $width = 8) 
{
    $area = $length * $width;
  
    print("Area Of Rectangle = " . $area);   
     echo "\n";
       $peramiter = 2*($length * $width);
    
    echo("peramiterfor Rectangle=" . $peramiter);
}
rect_area(); 

?>


