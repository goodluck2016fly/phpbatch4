<?php

// => PHP Looping

// for 
// foreach 
// while 
// do..while 

$colorsones = ["red","green","blue","white","black","gray","pink"]; //index array
echo count($colorsones);  //7
var_dump($colorsones);

$coloroneskey = array_keys($colorsones);
//echo $coloroneskey; //error
var_dump($coloroneskey); //[0,1,2,3,4,5,6]

for($i=0; $i < count($colorsones); $i++){
	// echo $i; // 0 to 6
 
	// echo "This is indexed array or manual array by forloop = index key is ".$i . " and value is = ". $colorsones[$i] . "<br/>";



	echo "This is indexed array or manual array by forloop = index key is ". $coloroneskey[$i] . " and value is = ". $colorsones[$i] . "<br/>";
}



 foreach($colorsones as $colorsone){
 	echo "This is indexed array or manual array by foreach = ". $colorsone;	
 }


foreach($colorsones as $idx=>$colorsone){
	echo $key;
 	echo "This is indexed array or manual array by foreach =  index key is ".$key . " and value is ". $colorsone;	
 }


 $x = 0;
 while($x < count($colorsones)){
 	// echo $colorsones[$x];
 	// $x++;

 // echo "This is indexed array or manual array by while = index key is ".$x . " and value is ". $colorsones[$x];
 echo "This is indexed array or manual array by while = index key is "$colorsoneskey[$x] . " and value is ". $colorsones[$x];$x++;

  $y = 0;
 while($y);

 // echo "This is indexed array or manual array by while = index key is ".$y . " and value is ". $colorsones[$y];
 echo "This is indexed array or manual array by while = index key is "$colorsone[$y] . " and value is ". $colorsones[$y];$y++;

while $y<count($colorsones)
?>