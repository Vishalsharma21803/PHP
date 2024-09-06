<?php
// static variable : remembers its previous value
function static_var(){
    static $a=2;
    $b=2;
    $a++;
    $b++;
    echo"static: $a\n";
    echo"non-static: $b\n";
}
static_var();
static_var();

$arr=array("Ram","shyam","mohan","rohan");
// array_chunk()
print_r(array_chunk($arr,2,true)); // array ko 2-2 ke chunks(parts) mein divide kr dega
$newarr= array("INT220"=>"PHP", "INT221"=>"Laravel","INT222"=>"Node");

// array_diff()
//array_flip() : interchange keys and values with each other
$res=array_flip($newarr);
print_r($res);

// array_intersect(): gives the common elements from all the arrays
// array_merge(): merges two or more arrays into one array



?>