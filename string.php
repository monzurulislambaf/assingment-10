
<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string){
    $vowelCount = preg_match_all("/[aeiou]/", $string);
    $reversedString = strrev($string);
    echo "Original String: $string, ";
    echo "Vowel Count: $vowelCount, ";
    echo " Reversed String: $reversedString\n";
}