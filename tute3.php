<?php
$course=array("eng2","eng2","mat2","sat2","eng2","pat2");
// array_unique() : print only unique values
print_r(array_unique($course));
$arr=array("Ram","shyam","mohan");
// array_merge() : merge two arrays
print_r(array_merge($course,$arr));


// pass by value
function add($a){
    $a+=5;
}
$a=10;
add($a);
echo $a."\n";

// pass by reference
function add2(&$a){
    $a+=5;
}
add2($a);
echo ($a)."\n";

?>