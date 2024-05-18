<?php
$strings = ["Hello", "World", "PHP", "Programming"];
foreach ($strings as $string) {
    $vowelCount = preg_match_all('/[a, e, i, o, u]/i', $string);
    $reversedString = strrev($string);
    echo "Original String: " . $string . ", Vowel Count: " . $vowelCount . ", ";
    echo "Reversed String: " . $reversedString . "<br>";
}
?>