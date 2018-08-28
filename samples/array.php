<?php

$array = array(
    "One" => "First", 
    "Two" => "Second", 
    "Three" => "Three",
);

echo "First Key:" . array_key_first($array) . "<br/>";
echo "First Value:" . $array[array_key_first($array)] . "<br/>";
echo "<br/>";
echo "Last Key:" . array_key_last($array) . "<br/>";
echo "First Value:" . $array[array_key_first($array)] . "<br/>";