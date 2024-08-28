
<?php
//printing
ECHO "Hello World!"."\n";
echo "Hello World!\n";
EcHo "Hello World!\n";
// another way of printing
print_r ("hello world\n");

$color="red";
echo"my color ".$color."\n";
echo"my color $color \n";
/* this is a comment */
// this is also a comment
//declaring variables
$a=10;
$name=$place="kashi";
$b=20;
$c=$a+$b;
echo"addition= $c \n";

//to check datatype of a variable
$x = 55;
var_dump($x); // echo is not required
echo "\n".gettype($x); //when we want to use multiple inverted commas in a single echo we use fullstop(.) 
// fullstop is used for concatination

//Array
$arr=array(1,2,3,4,5);
echo"\n".$arr[0]."\n";

//typecasting
$x=5;
$x=(string)$x;
var_dump($x);

?>


