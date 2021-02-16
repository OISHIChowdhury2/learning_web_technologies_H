<?php

$arr=["1st","2nd" ,"3th"];


 for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "\n";
}

echo "\n";


// print the number
$number = range(3,1);  
for($i=0; $i<5; $i++)
{   
  for($j=2; $j>=$i; $j--)
  {  
    echo $number[$j];  
    }  
 echo "\n";
}  



// print the alphabet
$alpha = range('A','Z');  
for($i=0; $i<3; $i++)
{   
  for($j=0; $j<=$i; $j++)
  {
    	# code... 
    echo $alpha[$i]; 
     $alpha[$i]++; 



    }  

   echo "\n";
}  

 
?>