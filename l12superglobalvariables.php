<?php 

// =>Super Global Variable
// 1. $GLOBALS 
// 2. $_SERVER 
// 3. $_REQUEST 
// 4. $_POST 
// 5. $_GET 
// 6. $_FILES 
// 7. $_ENV 
// 8. $_COOKIE 
// 9. $_SESSION 




$x = 100;
$y = 200;

// *error
// function sumresultone(){
// 		$total = $x+$y;
//  	return $total;
// }

// echo sumresultone();
// echo $total;



function sumresultone(){
	$GLOBALS['total'] = $GLOBALS['x']+$GLOBALS['y'];
	return $GLOBALS['total'];
}

echo sumresultone();		    // 300
echo $GLOBALS['total'];			// 300
echo $total;					// 300


=> 2.   $_SERVER 
echo $_SERVER["PHP_SELF"]; //

echo $_SERVER["HTTP_USER_AGENT"]; //

echo $_SERVER["HTTP_HOST"]; //

?>