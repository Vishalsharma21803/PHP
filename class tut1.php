<?php
$d = date("D");
if($d == "Fri"){
    echo "It's Friday!";
}

$t = date("H");
if($t < "20"){
    echo "\nHave a good day!";
}
echo "\n";

$num = 12;
if($num > 10){
    echo "The number is greater than 10";
}
echo "\n";

$n = 10;
if($n % 2 == 0){
    echo "The number is even";
} else {
    echo "The number is odd";
}
echo "\n";

$d1 = date("D");
if($d1 == "Fri"){
    echo "Have a nice weekend!";
} else {
    echo "Have a nice day!";
}
echo "\n";

// ternary operator
$age = 20;
echo ($age < 18) ? "Child" : "Adult";
echo "\n";

// switch case
$favcolor = "blue";
switch($favcolor){
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "\n";

// Loops
// for loop
for($x = 0; $x <= 10; $x++){
    echo "The number is: $x\n";
}

// while loop
$y = 0;
while($y <= 10){
    echo "The number is: $y\n";
    $y++;
}

// do while loop
$z = 0;
do{
    echo "The number is: $z\n";
    $z++;
} while($z <= 10);

// foreach loop
$colors = array("red", "green", "blue", "yellow");
foreach($colors as $value){
    echo "$value\n";
}

echo $colors[6]."\n";

$superheroes = array(
    "spiderman" => "Peter Parker",
    "superman" => "Clark Kent",
    "batman" => "Bruce Wayne"
);

foreach($superheroes as $key => $value){
    echo "$key : $value\n";
}

?>