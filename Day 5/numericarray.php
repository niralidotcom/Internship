<?php
$subject =array("c","c++","java","php");
echo $subject[3];
echo "<br/>";
echo "<br/>";


//second method to create a array.

$subject[0]="c";
$subject[1]="c++";
$subject[2]="java";
$subject[3]="php";

for($i=0; $i < count($subject); $i++)
{
echo $subject[$i]."<br/>";
}

//3 inbuilt function to debug an array

echo "<pre>";
print_r($subject);
echo "<pre>";
echo "<pre>";
var_dump($subject);
echo "<pre>";
?>

