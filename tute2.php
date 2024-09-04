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

$superhero =array(
    "name"=>"peter",
    "email"=>"peter@gamil.com",
    "age"=>15
);

foreach($superhero as $key=>$value){
    echo $key." => ".$value."\n";
}

$arr2=array(
    array("ram",200,1000),
    array("shyam",200,1555),
    array("mohan",200,50000)
    // in PHP we use array() function to create an array
);

for($row=0;$row<3;$row++){
    for($col=0;$col<3;$col++){
        echo $arr2[$row][$col]." ";
    }
    ECHO "\n";
}

$course2=array("eng2","mat2","sat2","pat2");
// implode function: convert array int string
// explode function: convert string into array
echo implode($course2);
$cou="hellooo world and master vishal\n";
print_r (explode(" ",$cou));
print_r($cou);
echo "datatype of cou is: ".gettype($cou)."\n";
// unset function
$newarr2= array("INT220"=>"PHP", "INT221"=>"Laravel","INT222"=>"Node");
//printing keys only
print_r(array_keys($newarr2));
print_r($newarr2);




?>