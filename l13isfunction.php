<?php


// Check Variable Type

// => is_string(variable) Function 
$val1 = "Save Myanmar";
echo "val1 is " . is_string($val1);     // 1 (string ဖြစ်လို့ trueထုတ်ပေး true က 1)

echo var_dump($val1); // string(12) "Save Myanmar"
echo gettype($val1); //string
//gettypeက valueကိုလှမ်းခေါ်ပေးတာ သီးသန့်datatypeပဲထုတ်ပေးတာ


$val2 = 0;
echo "val2 is " . is_string($val2);

$val3 = 50;
echo "val3 is " . is_string($val3);

$val4 = "50";
echo "val4 is " . is_string($val4); //1

$val5 = true;
echo "val5 is " . is_string($val5);

$val6 = "";
echo "val6 is " . is_string($val6); //1




// => is_numeric(variable) Function 
$val7 = 50;
echo "val7 is ". is_numeric($val7); //1
echo "val7 is ". is_int($val7); //1
echo "val7 is ". is_integer($val7); //1
echo gettype($val7); //integer


$val8 = 34.56;
echo "val8 is ". is_numeric($val8); //1
echo "val8 is ". is_int($val8); 
echo "val8 is ". is_integer($val8); 
echo gettype($val8); //float ဒသမ ၁လုံး၂လုံး နည်းရင်
echo gettype($val8); //double ဒသမကိန်းများရင်

$val9 = "50";
// ***********
echo "val9 is ". is_numeric($val9); //1 (numericဖြစ်နေလို့ trueထွက်)
echo "val9 is ". is_int($val9); 
echo "val9 is ". is_integer($val9); 




// => is_float(variable) Function (float = ဒသမကိန်း ဟုတ်/မဟုတ်)
//ဘာမှမထွက်ရင် false
$val9 = 40;
echo "val9 is ". is_float($val9);

$val10 = 34.56;
echo "val9 is ". is_float($val10); //1

$val11 = "34.56";
echo "val9 is ". is_float($val11);




// => is_bool(variable) Function 

$val12 = true;
echo "val12 is ". is_bool($val12); //1
echo gettype($val12); //boolean

$val13 = FALSE;
echo "val13 is ". is_bool($val13); //1

$val14 = 1;
echo "val14 is ". is_bool($val14); 

$val15 = "true";
echo "val15 is ". is_bool($val15); 




// => is_array(variable) Function 

$val16 = "Help Myanmar";
echo "val16 is ". is_array($val16);

// $val17 = ["aung aung","su su"]; //1
$val17 = array("aung aung","su su");
echo "val17 is ". is_array($val17); //1
echo gettype($val17); //array





// => is_null(variable) Function 

$val18 = 0;
echo "val18 is ". is_null($val18);

$val19 = null;
echo "val19 is ". is_null($val19); //1

$val20 = Null;
echo "val20 is ". is_null($val20); //1

$val21 = NULL;
echo "val21 is ". is_null($val21); //1

$val22 = "null";
echo "val22 is ". is_null($val22);


// => empty(variable) VS isset(variable)
// Note :: the following values are empty  
// 0 
// 0.0 
// "0" 
// "" 
// NULL 
// FALSE 
// []


$val21 = [];

if(empty($val21)){
	echo "Your variable is empty";
}else{
	echo "Your variable is not empty";
}  //Your variable is empty


if(isset($val21)){
	echo "Your variable with value";
}else{
	echo "Your variable without value";
}  //Your variable with value
//isset က value ကိုစစ်တာပဲမဟုတ်ဘူး ခလုတ်တွေဘာတွေနှိပ်သလား button တွေမှာ click ခေါက်သလား မခေါက်သလား စစ်တာ



=> isset() စစ်တာ VS unset() ဖျက်တာ

// $city;  // value မရှိရင် no ထွက် 
$city = "Yangon";  // value ရှိရင် yes ထွက် 
$country = "Thailand";
echo isset($city) ? "Yes" : "No";
echo $city;  // Yangon
echo $country; //Thailand

unset($city,$country);
echo $city;        //PHP Warning:  Undefined variable $city in /tmp/main.php on line 7
echo $country;     //PHP Warning:  Undefined variable $country in /tmp/main.php on line 8

?>