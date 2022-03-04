<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Declare second integer, double, and String variables.
$varInt=4;
$varDouble=4.0;
$varString="HackerRank";

// Read and save an integer, double, and String to your variables.
$i = intval(trim(fgets(STDIN)));
$d = (trim(fgets(STDIN)));
$s = (trim(fgets(STDIN)));


// Print the sum of the Integer variables on a new line.
echo $i+$varInt."\n";

// Print the sum of the double variables on a new line.
echo number_format($d+$varDouble,1)."\n";

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $varString." $s\n";

fclose($handle);
?>
