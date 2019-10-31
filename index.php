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


//Use the date function in place of $currentYear;
//1919 - 2019
for($year = date('Y') - 100; $year <= date('Y');$year++){
    echo $year . "<br/>\n";
}


//Add array code from other chapters  
$learn = array('Conditionals', 'Arrays', 'Loops',); //Basic Array
$learn [] = "Build something awesome";//Add value to the end of the array
array_push($learn, 'Functions', 'Forms', 'Objects');//Add values to the end of the array
array_unshift($learn, 'HTML', 'CSS');//Add elements to the beginning of array
asort($learn);//Sort array by value without changing the key
sort($learn);//Sort array by key before for loop 

/*
//Set $i = 0 since this array is 0 index
//Loop while $i is less than the count() of array elements
//$i iteration expression
for($i = 0; $i < count();$i++ ){
    echo $learn[$i] . "\n";
}
*/

//Practical Exercise 
//Create a FOR loop that displays each number from 1 to 100.
//Make sure that you DO NOT show 0 and you DO show 100
$facts = array(
    57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
    2 => ' is the approximate hours a day Giraffes sleeps',
    18 => ' is the average hours a Python sleeps per day',
    10 => ' per cent of the world is left-handed.',
    11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
    98 => '% of the atoms in your body are replaced every year',
    69 => ' is the largest number of recorded children born to one woman',
);

/*
//add your loop below this line

for($i=1; $i<=100;$i++){
echo $i . "\n"; 
}
*/

for ( $i = 1; $i <= 100; $i++ ) {
    echo $i;//Echo keys
    if (isset($facts[$i])) { //If key is same as iterative variable 
        echo $facts[$i] . "<br />\n";//Print iterative variable
    }
}

?>