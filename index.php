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

exit;