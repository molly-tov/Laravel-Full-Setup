<?php
/*
Odd or Even

num = readline("Enter a number: ")
if (num % 2 = 0) {
    echo $num " is Even\n"
} else {
    echo num . " is Odd\n"
}
*/



$num = (int) readline("Enter a number: ");
if ($num % 2 == 0) {
    echo $num . " is Even\n";
} else {
    echo $num . " is Odd\n";
}

/*
num = readline("Enter a number: ")
result = "Even"
if ($num % 2  0) {
    result = "Odd"
}
*/

$num = (int) readline("Enter a number: ");
$result = ($num % 2 == 0) ? "Even" : "Odd";
echo "$num is $result\n";
