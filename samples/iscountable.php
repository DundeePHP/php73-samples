<?php

$array = [1,2,3,4,5,6];

if(is_countable($array)) {
    echo "Array is countable. Count is" . count($array);
}