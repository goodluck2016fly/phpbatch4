<?php


// => settype(variable,type) Function

$val1= "50";
echo gettype($val1); //string
settype($val1,"integer");
echo gettype($val1); //integer
//string to integer ပြောင်း 

$val2= 100;
echo gettype($val2); //integer
settype($val2, "string");
echo gettype($val2); //string
//integer to string ပြောင်း 

$val3= true;
echo gettype($val3); //boolean
settype($val3, "string");
echo gettype($val3); //string
//boolean to integer ပြောင်း 

$val4= FALSE;
echo gettype($val4); //boolean
settype($val4, "string");
echo gettype($val4); //string
//boolean to string ပြောင်း 


?>