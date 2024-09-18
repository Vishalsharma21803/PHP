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

// array_slice()
print_r("array slice: ".array_slice($newarr,1,2));

// array_diff()
//array_flip() : interchange keys and values with each other
$res=array_flip($newarr);
print_r($res);

// array_intersect(): gives the common elements from all the arrays
// array_merge(): merges two or more arrays into one array
$course=array("eng2","eng2","mat2","sat2","eng2","pat2");
print_r(array_merge($arr,$course));
//array_pop():removes the last element of the array
//array_reverse(): reverse the array
//array_search():
//array_column():returns the values from a single column in the input array
$arr2=array(
    array('name'=>"ram",200,1000),
    array('name'=>"shyam",200,1555),
    array('name'=>"mohan",200,50000)
    // in PHP we use array() function to create an array
);
$name=array_column($arr2,'name');
print_r($name);

?>