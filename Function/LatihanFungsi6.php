<?php
function filterStrings($array) {
    return array_filter($array, function($str) {
        return strlen($str) > 5;
    });
}

$input = ["apple", "banana", "orange", "pineapple", "kiwi"];
print_r(filterStrings($input)); // Output: ["banana", "orange", "pineapple"]
