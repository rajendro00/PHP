<?php
/**
 * Plugin Name: PHP Tutorial
 */

 $names = "This is my {First Project}";
 
 $result = str_replace(["{", "}"],["<span>", "</span>"],$names);

 echo $result;

 echo "<br>";

 $names2 = "{Akash} (Rajendro) [Nur islam]";
 $result2 = str_replace(['{','}', '(', ')', '[', ']'],['<span style="color:red;">', '</span>', '<span style="color:yellow">', '</span>', '<span style="color:green">', '</span>'],$names2);
 echo $result2;

 echo "<br>";

 $names3 = "Bangladesh is a very beautiful country. It is a agricultures country";
 $result3 = str_replace(['Bangladesh', 'agricultures'],['India', 'River'],$names3);
 echo $result3;

 echo "<br>";

$title = "Bangladesh is a very beautiful country. It is a agricultures country";
$result4 = substr($title, -20, 12);
echo $result4, "<br>";


// string
$x = "Jhon";
$y = "Hello $x";
echo $y, "<br>";

// strlen
echo strlen("Hello world. Hello Bangladesh"),"<br>";

// str_word_count
echo str_word_count("Bangladesh is a agricultures country"),"<br>";

// strpos
echo strpos("Hello Bangladesh. Hello !World!", "World!"); 
echo "<br>";

$strpos = "Bangladesh Pakistan India Nepal Bhutan USA";
// var_dump(strpos($strpos, 'India'));
// var_dump(strpos($strpos, "jkdhfuiwehf"));
if(strpos($strpos, "jkdhfuiwehf")){
    echo "match found","<br>";
}else{
    echo "match not found","<br>";
}

$text  = "hello world!";
$position = strpos($text, 'world');
// echo $position;

if($position !== false){
    echo "match found","<br>";
}else{
    echo "match not found","<br>";
}

// Original string
$string = "Bangladesh India Pakistan Nepal USA Malaysia";

$searchString = ["Bangladesh", "Pakistan", "Malaysia"];

foreach($searchString as $search){
    $position33 = strpos($string,$search);

    if($position33 !==false){
        echo "$search position no $position33. <br>";
    }else{
        echo "$search is a not found";
    }
}

$uropeCounrty = "Italy Swiden Swizerland Englaland Finland Spain Germany Mexico";

$searchUropeCounrty = ["Italy", "akhG", "Finland", "Spain", "jhdghu"];

foreach($searchUropeCounrty as $search22){
    $position44 = strpos($uropeCounrty, $search22);

    if($position44 !== false){
        echo "$search22 position number $position44 .<br>";
    }else{
        echo "$search22 is not found.<br>";
    }
}

// string upper case

$x21 = "hello World";
echo strtoupper($x21), "<br>";

// string lower case
$x22 = "HELLO BANGLADESH";
echo strtolower($x22), "<br>";

// The PHP strrev() function reverses a string.
$x23 = "Hello World!";
echo strrev($x23), "<br>";

// The trim() removes any whitespace from the beginning or the end:
$x24 = " Hello Bangladesh   ";
 echo trim($x24);

 $str = "Hello World!. Hello Bangladesh. Hello India";
 $strRES = explode(" ", $str, -3);
 echo "<pre>";
 print_r($strRES);
 echo "</pre>";

//  Concatenate Strings
$M = "hello";
$N = "World!";
$mn1 = $M. $N;
$mn2 = $M. " " .$N;
$mn3 = "$M $N";
echo $mn1 , "<br>";

// php substr
$sub = "Happy New Year 2024";
// $subRes = substr($sub, 6, 3);
// $subRes = substr($sub, 6, -5);
$subRes = substr($sub, -13, 8);
echo $subRes, "<br>";

$escap = "We are the so-called \"Vikings\" from the north.";
echo $escap;

// strpos
// strpos
$name31 = "Rajendro Akash Nur Sohel Miraj Saif";
$nameRes = ["Rajendro", "gkjhg", "Nur", "Miraj" , "jkreehjk"];

foreach($nameRes as $details2){
    $DETAILSpOSITON = strpos($name31, $details2);

    if($DETAILSpOSITON !== false ){
        echo "$details2 no $DETAILSpOSITON . <br>";
    }else{
        echo "$DETAILSpOSITON is not  . <br>";
    }
}
echo "<br>";
echo "<br>";
echo "<br>";

echo strlen("hello World!");
echo "<br>";
echo str_word_count("hello Bnagladesh");
echo "<br>";
echo strpos("hello Bangladesh", "Bangladesh");
echo "<br>";
echo strtoupper("hello bangladesh");
echo "<br>";
echo strtolower("HELLO BANGLADESH");
echo "<br>";
echo strrev("hello World!");
echo "<br>";
echo trim(" hello world  ");
echo "<br>";
$x444 = "hello Bangladesh. hello world";
$y444 = explode(" ", $x444);

print_r($y444);
echo "<br>";

$v = "Rajshahi Dhaka Khulna Barisal Sylet Cumilla Rangpur";
$vv = ["Rajshahi", "Dhaka", "Khulna", "jkkrg"];

foreach($vv as $ss){
    $kk = strpos($v, $ss);

    if($kk !== false){
        echo "$ss position no $kk . <br>";
    }else{
        echo "$kk position is not found . <br>";
    }
}

$str = "(A) {B} [C] {{D}}";

// echo str_replace(["A", "B"], ["F", "H"], $str);

echo str_replace(['(',')','{', '}','[',']', '{{','}}'],['<span style="color:red">','</span>','<span style="color:green">','</span>','<span style="color:yellow">','</span>','<span style="color:tomato">','</span>'], $str);

// 
echo "<br>";

// check data type 
$a = 10;
$b = 20.22;
$c = "30";
var_dump($a,$b,$c);

echo "<br>";

// check int bool(true or false)
$a1 = 5040;
$b1 = 55.33;
$c1 = "55.60";

var_dump(is_int($a1));
var_dump(is_int($b1));
var_dump(is_int($c1));

// Check if a numeric value is finite or infinite:
$a12 = 1.9e411;
var_dump($a12);

// Invalid calculation will return a NaN value:

$a13 = acos (8);
var_dump($a13);

// Check if the variable is numeric:
   $a13 = 4545; 
   var_dump(is_numeric($a13));
   $a14 = "4545"; 
   var_dump(is_numeric($a14));
   $a15 = "59.85" + 100; 
   var_dump(is_numeric($a15));
   $a16 = "Hello";
   var_dump(is_numeric($a16));

// Cast float and string to integer:
 $a21 = 402.566;
 echo (int)$a21;
echo "<br>";
 $b21 = "647698";
 echo (int)$b21;

//  To cast to string, use the (string) statement:
echo "<br>";

$a40 = 20;
$a41 = 20.44;
$a42 = "hello";
$a43 = true;
$a44 = NULL;

// var_dump((string)$a40);
// var_dump((string)$a41);
// var_dump((string)$a42);
// var_dump((string)$a43);
// var_dump((string)$a44);

var_dump((array)$a40);
var_dump((array)$a41);
var_dump((array)$a42);
var_dump((array)$a43);
var_dump((array)$a44);

echo "<br>";

// convert object to array

class car{
    public $color;
    public $model;

    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return $this->color.$this->model;
    }
}

$myCar = new car("red", "volvo");
$myCar = (array)$myCar;
var_dump($myCar);

echo "<br>";
// array to object

$arr = ["Volvo", "BMW", "Honda"];
$arr1 = ["Rajendro"=>"22", "Akash"=>"20", "Nur"=>"23"];

var_dump((object)$arr);
var_dump((object)$arr1);

// min and max

echo (min(0, 12, 23, 44, 99, -100));
echo "<br>";
echo (max(0, 12, 23, 44, 99, -100));
echo "<br>";
echo (abs(-66.66));
echo "<br>";
echo (sqrt(49));
echo "<br>";
echo (sqrt(64));
echo "<br>";
echo (sqrt(40));
echo "<br>";
echo (round(0.65));
echo "<br>";
echo (round(0.35));
echo "<br>";
echo (rand(10,20));
echo "<br>";

// constants
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

 const arr55 = ["Hello", "World", "Bangladesh"];
 print_r(arr55);

 define("name90",["Akash", "Nur", "Rajendro"]);

 echo name90[1];
//  print_r(name90);
echo "<br>";
define("define1", "This is my first practice");

function res(){
    echo define1;
}
res();

echo "<br>";
$equal = 20;
$equa2 = 10;

if($equal !== $equa2){
    echo "Same value ";
}else{
    echo "different value";
}
echo "<br>";
$int = 6747.88;
var_dump(is_string($int));

$som = acos(44);
var_dump($som);

$num = 8369;
var_dump(is_numeric($num));

exit;