<?php
function reverseArray($array) {
    return array_reverse($array);
}

$input = [1, 2, 3, 4, 5];

function membalik($array) {
    return reverseArray($array);
};

print_r(membalik($input)); // Output: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
