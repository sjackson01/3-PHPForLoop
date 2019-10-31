<?php

/* 
    !PHP For Loops! 
    Remove comments 
    to manipulate 
    code blocks.
*/

//Add code from pervious exercise 
//For loop with counter in second expression
//$currentYear = date('Y');
//$year = $currentYear - 100; 

/* 
//For loop with counter in second expression
//1920-1919
for($year = $currentYear - 100; ++$year <= $currentYear;   ){
    echo $year . "<br />\n";
}
*/

/*
//Create traditional for loop with counter in 3rd expression
//1919-2019
for($year = $currentYear - 100; $year <= $currentYear; $year++){
    echo $year . "<br />\n";
}
*/

/*
//Move current year into the for loop 
//By seperating expressoin with a comma
//1919 - 2019
for($currentYear = date('Y'), $year = $currentYear - 100; $year
<= $currentYear; $year++){
    echo $year . "<br />\n";
}
*/

/*
//Use the date function in place of $currentYear;
//1919 - 2019
for($year = date('Y') - 100; $year <= date('Y');$year++){
    echo $year . "<br/>\n";
}
*/

//Add array code from other chapters  
$learn = array('Conditionals', 'Arrays', 'Loops',); //Basic Array
$learn [] = "Build something awesome";//Add value to the end of the array
array_push($learn, 'Functions', 'Forms', 'Objects');//Add values to the end of the array
array_unshift($learn, 'HTML', 'CSS');//Add elements to the beginning of array
asort($learn);//Sort array by value without changing the key
sort($learn);//Sort array by key before for loop 

//Set $i = 0 since this array is 0 index
//Loop while $i is less than the count() of array elements
//$i iteration expression
for($i = 0; $i < count();$i++ ){
    echo $learn[$i] . "\n";
}

?>