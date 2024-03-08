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
echo $result4;

 exit;