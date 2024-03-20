<?php

$fullname = "U Kyaw Kyaw";
$job = "Developer";

echo $fullname;
print $job;

echo "$fullname"; // U Kyaw Kyaw
print '$job';  //$job (single code '' မှာအလုပ်မလုပ်ဘူး)


echo "My name is $fullname"; //My name is U Kyaw Kyaw
echo 'My name is $fullname'; //My name is $fullname
echo "My name is ${fullname}"; // My name is U Kyaw Kyaw
echo "My name is {$fullname}"; // My name is U Kyaw Kyaw

echo `My name is ${fullname}`; // error	  My name is $fullname(in PHP)	
echo `My name is {$fullname}`; // error	  My name is $fullname(in PHP)

// 20 Feb 2024
echo "He\'s my father, he is a $job"; // He\'s my father, he is a Developer

echo "He's my father, he is a \$job"; // He's my father, he is a $job	
echo 'He\'s my father, he is a $job'; // He's my father, he is a $job	
echo "He's my father, he is a \${job}"; // He's my father, he is a ${job}	
echo "He's my father, he is a \{$job}"; // He's my father, he is a \{Developer}	
echo "He's my father, he is a {\$job}"; // He's my father, he is a {$job}	

// 		echo Vs print
$gender = echo "female";  //error
$nation = print "burma";  //burma


// Concat (.)

$firstname = "Aung";
$lastname = "Kyaw Kyaw";

echo $firstname.$lastname;
echo $firstnaem.' '.$lastname;

//Comments
# Single Line Comment 

/* Multi Line Comment 
comment 1
comment 2
comment 3 */



?>