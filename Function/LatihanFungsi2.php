<?php
function combineStrings($a, $b) {
    if ($a == "" || $b == "") {
        return $a != "" ? $a : $b;
    } else {
        return $a . " " . $b;
    }
}

$input1 = "Hello";
$input2 = "World";
$input3 = "";

echo combineStrings($input1, $input2); // Output: "Hello World"
echo combineStrings($input1, $input3); // Output: "Hello"
// Dalam kode di atas, fungsi combineStrings() menggabungkan dua string dengan spasi di antaranya, kecuali jika 
// salah satu string kosong, maka cukup kembalikan string yang tidak kosong.
