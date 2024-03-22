<?php
/**
 * Plugin Name: PHP Tutorial
 */

//  $names = "This is my {First Project}";
 
//  $result = str_replace(["{", "}"],["<span>", "</span>"],$names);

//  echo $result;

//  echo "<br>";

//  $names2 = "{Akash} (Rajendro) [Nur islam]";
//  $result2 = str_replace(['{','}', '(', ')', '[', ']'],['<span style="color:red;">', '</span>', '<span style="color:yellow">', '</span>', '<span style="color:green">', '</span>'],$names2);
//  echo $result2;

//  echo "<br>";

//  $names3 = "Bangladesh is a very beautiful country. It is a agricultures country";
//  $result3 = str_replace(['Bangladesh', 'agricultures'],['India', 'River'],$names3);
//  echo $result3;

//  echo "<br>";

// $title = "Bangladesh is a very beautiful country. It is a agricultures country";
// $result4 = substr($title, -20, 12);
// echo $result4, "<br>";


// // string
// $x = "Jhon";
// $y = "Hello $x";
// echo $y, "<br>";

// // strlen
// echo strlen("Hello world. Hello Bangladesh"),"<br>";

// // str_word_count
// echo str_word_count("Bangladesh is a agricultures country"),"<br>";

// // strpos
// echo strpos("Hello Bangladesh. Hello !World!", "World!"); 
// echo "<br>";

// $strpos = "Bangladesh Pakistan India Nepal Bhutan USA";
// // var_dump(strpos($strpos, 'India'));
// // var_dump(strpos($strpos, "jkdhfuiwehf"));
// if(strpos($strpos, "jkdhfuiwehf")){
//     echo "match found","<br>";
// }else{
//     echo "match not found","<br>";
// }

// $text  = "hello world!";
// $position = strpos($text, 'world');
// // echo $position;

// if($position !== false){
//     echo "match found","<br>";
// }else{
//     echo "match not found","<br>";
// }

// // Original string
// $string = "Bangladesh India Pakistan Nepal USA Malaysia";

// $searchString = ["Bangladesh", "Pakistan", "Malaysia"];

// foreach($searchString as $search){
//     $position33 = strpos($string,$search);

//     if($position33 !==false){
//         echo "$search position no $position33. <br>";
//     }else{
//         echo "$search is a not found";
//     }
// }

// $uropeCounrty = "Italy Swiden Swizerland Englaland Finland Spain Germany Mexico";

// $searchUropeCounrty = ["Italy", "akhG", "Finland", "Spain", "jhdghu"];

// foreach($searchUropeCounrty as $search22){
//     $position44 = strpos($uropeCounrty, $search22);

//     if($position44 !== false){
//         echo "$search22 position number $position44 .<br>";
//     }else{
//         echo "$search22 is not found.<br>";
//     }
// }

// // string upper case

// $x21 = "hello World";
// echo strtoupper($x21), "<br>";

// // string lower case
// $x22 = "HELLO BANGLADESH";
// echo strtolower($x22), "<br>";

// // The PHP strrev() function reverses a string.
// $x23 = "Hello World!";
// echo strrev($x23), "<br>";

// // The trim() removes any whitespace from the beginning or the end:
// $x24 = " Hello Bangladesh   ";
//  echo trim($x24);

//  $str = "Hello World!. Hello Bangladesh. Hello India";
//  $strRES = explode(" ", $str, -3);
//  echo "<pre>";
//  print_r($strRES);
//  echo "</pre>";

// //  Concatenate Strings
// $M = "hello";
// $N = "World!";
// $mn1 = $M. $N;
// $mn2 = $M. " " .$N;
// $mn3 = "$M $N";
// echo $mn1 , "<br>";

// // php substr
// $sub = "Happy New Year 2024";
// // $subRes = substr($sub, 6, 3);
// // $subRes = substr($sub, 6, -5);
// $subRes = substr($sub, -13, 8);
// echo $subRes, "<br>";

// $escap = "We are the so-called \"Vikings\" from the north.";
// echo $escap;

// // strpos
// // strpos
// $name31 = "Rajendro Akash Nur Sohel Miraj Saif";
// $nameRes = ["Rajendro", "gkjhg", "Nur", "Miraj" , "jkreehjk"];

// foreach($nameRes as $details2){
//     $DETAILSpOSITON = strpos($name31, $details2);

//     if($DETAILSpOSITON !== false ){
//         echo "$details2 no $DETAILSpOSITON . <br>";
//     }else{
//         echo "$DETAILSpOSITON is not  . <br>";
//     }
// }
// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo strlen("hello World!");
// echo "<br>";
// echo str_word_count("hello Bnagladesh");
// echo "<br>";
// echo strpos("hello Bangladesh", "Bangladesh");
// echo "<br>";
// echo strtoupper("hello bangladesh");
// echo "<br>";
// echo strtolower("HELLO BANGLADESH");
// echo "<br>";
// echo strrev("hello World!");
// echo "<br>";
// echo trim(" hello world  ");
// echo "<br>";
// $x444 = "hello Bangladesh. hello world";
// $y444 = explode(" ", $x444);

// print_r($y444);
// echo "<br>";

// $v = "Rajshahi Dhaka Khulna Barisal Sylet Cumilla Rangpur";
// $vv = ["Rajshahi", "Dhaka", "Khulna", "jkkrg"];

// foreach($vv as $ss){
//     $kk = strpos($v, $ss);

//     if($kk !== false){
//         echo "$ss position no $kk . <br>";
//     }else{
//         echo "$kk position is not found . <br>";
//     }
// }

// $str = "(A) {B} [C] {{D}}";

// // echo str_replace(["A", "B"], ["F", "H"], $str);

// echo str_replace(['(',')','{', '}','[',']', '{{','}}'],['<span style="color:red">','</span>','<span style="color:green">','</span>','<span style="color:yellow">','</span>','<span style="color:tomato">','</span>'], $str);

// // 
// echo "<br>";

// // check data type 
// $a = 10;
// $b = 20.22;
// $c = "30";
// var_dump($a,$b,$c);

// echo "<br>";

// // check int bool(true or false)
// $a1 = 5040;
// $b1 = 55.33;
// $c1 = "55.60";

// var_dump(is_int($a1));
// var_dump(is_int($b1));
// var_dump(is_int($c1));

// // Check if a numeric value is finite or infinite:
// $a12 = 1.9e411;
// var_dump($a12);

// // Invalid calculation will return a NaN value:

// $a13 = acos (8);
// var_dump($a13);

// // Check if the variable is numeric:
//    $a13 = 4545; 
//    var_dump(is_numeric($a13));
//    $a14 = "4545"; 
//    var_dump(is_numeric($a14));
//    $a15 = "59.85" + 100; 
//    var_dump(is_numeric($a15));
//    $a16 = "Hello";
//    var_dump(is_numeric($a16));

// // Cast float and string to integer:
//  $a21 = 402.566;
//  echo (int)$a21;
// echo "<br>";
//  $b21 = "647698";
//  echo (int)$b21;

// //  To cast to string, use the (string) statement:
// echo "<br>";

// $a40 = 20;
// $a41 = 20.44;
// $a42 = "hello";
// $a43 = true;
// $a44 = NULL;

// // var_dump((string)$a40);
// // var_dump((string)$a41);
// // var_dump((string)$a42);
// // var_dump((string)$a43);
// // var_dump((string)$a44);

// var_dump((array)$a40);
// var_dump((array)$a41);
// var_dump((array)$a42);
// var_dump((array)$a43);
// var_dump((array)$a44);

// echo "<br>";

// // convert object to array

// class car{
//     public $color;
//     public $model;

//     public function __construct($color, $model){
//         $this->color = $color;
//         $this->model = $model;
//     }
//     public function message(){
//         return $this->color.$this->model;
//     }
// }

// $myCar = new car("red", "volvo");
// $myCar = (array)$myCar;
// var_dump($myCar);

// echo "<br>";
// // array to object

// $arr = ["Volvo", "BMW", "Honda"];
// $arr1 = ["Rajendro"=>"22", "Akash"=>"20", "Nur"=>"23"];

// var_dump((object)$arr);
// var_dump((object)$arr1);

// // min and max

// echo (min(0, 12, 23, 44, 99, -100));
// echo "<br>";
// echo (max(0, 12, 23, 44, 99, -100));
// echo "<br>";
// echo (abs(-66.66));
// echo "<br>";
// echo (sqrt(49));
// echo "<br>";
// echo (sqrt(64));
// echo "<br>";
// echo (sqrt(40));
// echo "<br>";
// echo (round(0.65));
// echo "<br>";
// echo (round(0.35));
// echo "<br>";
// echo (rand(10,20));
// echo "<br>";

// // constants
// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;

//  const arr55 = ["Hello", "World", "Bangladesh"];
//  print_r(arr55);

//  define("name90",["Akash", "Nur", "Rajendro"]);

//  echo name90[1];
// //  print_r(name90);
// echo "<br>";
// define("define1", "This is my first practice");

// function res(){
//     echo define1;
// }
// res();

// echo "<br>";
// $equal = 20;
// $equa2 = 10;

// if($equal !== $equa2){
//     echo "Same value ";
// }else{
//     echo "different value";
// }
// echo "<br>";
// $int = 6747.88;
// var_dump(is_string($int));

// $som = acos(44);
// var_dump($som);

// $num = 8369;
// var_dump(is_numeric($num));

// echo "<br>";

// if else condition

$num = 15;

if($num<100){
    echo "$num is less than 100";
}

echo "<br>";

$even = 20;

if($even%2==0){
    echo "$even is even number";
}else{
    echo "$even is odd number";
}

echo "<br>";

$marks = 30;

if($marks<33){
    echo "fail";
}elseif($marks>=33 && $marks<50){
    echo "D Grade";
}elseif($marks>=50 && $marks<60){
    echo "C Grade";
}elseif($marks>=60 && $marks<70){
    echo "B Grade";
}elseif($marks>=70 && $marks<80){
    echo "A Grade";
}elseif($marks>=80 && $marks<101){
    echo "A+ Grade";
}else{
    echo "Invalid Input";
}

echo "<br>";

$age = 100;

$nationality = "Bangladesh";

if($nationality = "Bangladesh"){
    if($age>=18){
        echo "Voter";
    }else{
        echo "Child";
    }
}

echo "<br>";

$a = 34;
$b = 56;
$c = 45;

if($a < $b){
    if($a < $c){
        echo "$a is smaller than $b and $c";
    }
}

echo "<br>";

$day = Date("D");

if($day == "Fri"){
    echo "holiday";
}elseif($day == "Sat"){
    echo "Nice Saturday";
}elseif($day == "Sun"){
    echo "Nice Sunday";
}else{
    echo "Have a Nice day";
}

echo "<br>";

$year = 2024;

if(($year % 4 == 0) && ($year % 100 != 0 || $year % 400 == 0)){
    echo "$year is a leap year";
}else{
    echo "$year is not a leap year";
}

$y = 2000;

if($y  % 100 != 0){
    echo "Hello";
}else{
  echo "Hi";
}

echo "<br>";
// number lower to upper 

$number3 = -5;

if($number3>=0 && $number3<100){
    echo "$number3 is less than 100";
}elseif($number3 == 100){
    echo "$number3 is same value of 100";
}elseif($number3<0){
    echo "$number3 is a negetive number";
}else{
    echo "$number3 is greeter than 100 ";
}

echo "<br>";

$number4 = 4;

if($number4 % 2 == 0){
    echo "$number4 is a even number";
}else{
    echo "$number4 is a odd number";
}
echo "<br>";

$result5 = 80;

if($result5<33){
    echo "Fail";
}elseif($result5>=33 && $result5<50){
    echo "D Grade";
}elseif($result5>=50 && $result5<60){
    echo "C Grade";
}elseif($result5>=60 && $result5<70){
    echo "B Grade";
}elseif($result5>=70 && $result5<80){
    echo "A Garde";
}elseif($result5>=80 && $result5<=100){
    echo "A+ Grade";
}else{
    echo "Invalid Input";
}

echo "<br>";

$voter2 = 17;

$nationality2 = "Bangladesh";

if($nationality2 == "Bangladesh"){
    if($voter2>=18){
        echo "yes you are voter";
    }else{
        echo "You are child";
    }
}

echo "<br>";

$a= 49; 
$b= 56;
$c = 50;

if($a<$b){
    if($a<$c){
        echo "$a is smaller than $b and $c";
    }
}

echo "<br>";

$day = Date("D");

if($day == "Fri"){
    echo "Holiday";
}elseif($day == "Sat"){
    echo "Saturday";
}elseif($day == "Sun"){
    echo "Sunday";
}
echo "<br>";
// positive number or negetive number 
$pos = 0;

if($pos>=0){
    echo "$pos is a positive number ";
}else{
    echo "$pos is a negative number";
}

echo "<br>";

$x2 = 20;
$x3 = 10;

if($x2>=0 && $x3>=0){
    echo "both $x2 and $x3 is a positive number";
}elseif($x2<=0 && $x3>=0){
    echo "$x2 is a negative number and $x3 positive number";
}elseif($x2>=0 && $x3<=0){
    echo "$x3 is a negative number and $x2 positive number";
}else{
    echo "both negative number";
}

echo "<br>";

$num5 = 31;

if($num5>=20 && $num5<=30){
    echo "$num5 is within rang of 20 to 30";
}else{
    echo "The number is not within the range of 20 to 30.";
}
echo "<br>";

$date = Date("Y-m-d");
$deadline = "2024-03-17";

if($date < $deadline ){
    echo "Cooming Soon";
}elseif($date == $deadline){
    echo "Today you die";
}else{
    echo "Your date expired";
}

echo "<br>";

$t = date("H");

if ($t < "8") {
  echo "Have a good morning!";
}else {
  echo "Have a good night!";
}

echo "<br>";

// php ternery operator

$number6 = 11;

$ternery1 = ($number6 % 2 == 0 ) ? "$number6 is an even number " : "$number6 is an odd number";

echo $ternery1;

echo "<br>";

$grad = "A";

$result6 = ($grad == "A") ? "Excellent you got an A" : "Keep up the good work";
echo $result6;

echo "<br>";

$num9 = 0;
// echo ($num > 0) ? "Positive" : (($num < 0) ? "Negative" : "Zero");

$result7 = ($num9 > 0) ? "Positive": (($num9 < 0) ? "Negative" : "zero");

echo $result7;

// php function
// calculator
// switch case

echo "<h2> Switch Case </h2>";

function calculator($num1, $num2, $operator){
    switch( $operator ){
        case "+";
        return $num1 + $num2;
        break;
        case "-";
        return $num1 - $num2;
        break;
        case "*";
        return $num1 * $num2;
        break;
        case "/";
        return $num1 / $num2;
        break;
        case "%";
        return $num1 % $num2;
        break;
        case "pi";
        return $num1.$num2.pi();
        break;
        case "abs";
        return abs( $num1 );
        break;
        case "sqrt";
        return sqrt( $num1 );
        break;
        case "round";
        return round( $num1 );
        break;
        case "rand";
        return rand( $num1, $num2 );
        break;
        default;
        return "Invalid operator";

    }
}

$addition = calculator( 10, 20, "+");
$subtraction = calculator( 10, 20, "-");
$multiplication = calculator( 10, 20, "*");
$division = calculator( 10, 20, "/");
$modulus = calculator( 10, 20, "%");
$pi = calculator( "", "", "pi" );
$abs = calculator( -90, "" ,"abs" );
$sqrt = calculator( 100, "" ,"sqrt" );
$round = calculator( 12.5, "", "round" );
$rand = calculator( 1, 10, "rand" );

echo "Addition: " . $addition ."<br>";
echo "Subtraction: " . $subtraction."<br>";
echo "Multiplication: " . $multiplication."<br>";
echo "Division: " . $division."<br>";
echo "Modulus: " . $modulus."<br>";
echo "PI: " . $pi."<br>";
echo "Abs: " . $abs."<br>";
echo "Sqrt: " . $sqrt."<br>";
echo "Round: " . $round."<br>";
echo "Rand: " . $rand."<br>";


// if else 

echo "<h2> if else </h2>";

function calculator2($number1, $number2, $operators){
    if( $operators == "+" ){
        return $number1 + $number2;
    }elseif( $operators == "-" ){
        return $number1 - $number2;
    }elseif( $operators == "*" ){
        return $number1 * $number2;
    }elseif( $operators == "/" ){
        return $number1 / $number2;
    }elseif( $operators == "%" ){
        return $number1 % $number2;
    }elseif( $operators == "pi"){
        return pi();
    }elseif( $operators == "abs" ){
        return abs( $number1 );
    }elseif( $operators == "sqrt" ){
        return sqrt( $number1 );
    }elseif( $operators == "round" ){
        return round( $number2 );
    }elseif( $operators == "rand" ){
        return rand( $number1, $number2 );
    }
}

$addition1 = calculator2( 40 , 50, "+");
$subtraction1 = calculator2( 40 , 50, "-");
$multiplication1 = calculator2( 40 , 50, "*");
$division1 = calculator2( 40 , 50, "/");
$modulus1 = calculator2( 40 , 50, "%");
$pi = calculator2( "" , "", "pi");
$abs = calculator2( -100 , "", "abs");
$sqrt = calculator2( 49 , "", "sqrt");
$round = calculator2( "" , 60.5, "round");
$rand = calculator2( 20, 50, "rand");

echo "Addition: ". $addition1. "<br>";
echo "Subtraction: ". $subtraction1. "<br>";
echo "Multiplication: ". $multiplication1. "<br>";
echo "Division: ". $division1. "<br>";
echo "Modulus: ". $modulus1. "<br>";
echo "PI: ". $pi. "<br>";
echo "Abs: ". $abs. "<br>";
echo "Sqrt: ". $sqrt. "<br>";
echo "Round: ". $round. "<br>";
echo "Rand: ". $rand. "<br>";


// ternary operator
echo "<h2> ternary operator </h2>";

function Cal( $n1, $n2, $op ){
    return ($op == "+" ? $n2 + $n2:
           ($op == "-" ? $n2 - $n2:
           ($op == "*" ? $n2 * $n2:
           ($op == "/" ? $n2 / $n2:
           ($op == "pi" ? pi():
           ($op == "abs" ? abs($n1):
           ($op == "sqrt" ? sqrt($n2):
           ($op == "round" ? round($n2):
           ($op == "rand" ? rand($n1, $n2):
           "Invalid Operator")))))))));
}

$s1 = cal( 10, 80, "+" );
$s2 = cal( 10, 80, "-" );
$s3 = cal( 10, 80, "*" );
$s4 = cal( 10, 80, "/" );
$s5 = cal( "", "", "pi" );
$s6 = cal( -10, "", "abs" );
$s7 = cal( "", 49, "sqrt" );
$s8 = cal( "", 49.5, "round" );
$s9 = cal( 1, 10, "rand" );

echo "Result: " . $s1. "<br>";
echo "Result: " . $s2. "<br>";
echo "Result: " . $s3. "<br>";
echo "Result: " . $s4. "<br>";
echo "Result: " . $s5. "<br>";
echo "Result: " . $s6. "<br>";
echo "Result: " . $s7. "<br>";
echo "Result: " . $s8. "<br>";
echo "Result: " . $s9. "<br>";
 

exit;