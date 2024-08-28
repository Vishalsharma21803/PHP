<?php
//array
$arr=array("Ram","shyam","mohan");
echo $arr[0]."\n";

//for length of arrray
$arrlength=count($arr);
echo "length of arr $arrlength \n";
// 2D array
$arr2=array(
    array("ram",200,1000),
    array("shyam",200,1555),
    array("mohan",200,50000)
    // in PHP we use array() function to create an array
);

echo $arr2[0][2]."\n";





print_r ($arr[2]);

//loops
$course=array("eng","mat","sat","pat");

for($i=0;$i<count($course);$i++){
    echo $course[$i]."\n";
}

//associative array
$newarr= array("INT220"=>"PHP", "INT221"=>"Laravel","INT222"=>"Node");

foreach($newarr as $i =>$value){
    echo "key=".$i.", value=".$value;
    echo"\n";
}



?>