<?php
//sample array
$test = array(1,2,3,4,5,6);
//show the array
print_r($test);

//seed the random number generator
mt_srand('123');
//generate a random number based on that
echo mt_rand();
echo "\n";

//shuffle the array
shuffle($test);

//show the results
print_r($test);