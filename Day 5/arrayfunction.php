

<?php
$arr = array('php','c','c++','java','Android'); 
echo count($arr);
echo "<br/>";
//array_count_values function

$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/><strong>$key</strong> - <strong>$value</strong> ";
}
echo"<br/>";
echo"<br/>";
// array_sum function
$myarray = array(1,2,3,4,5);
echo "sum of array";
echo array_sum($myarray);
 echo"<br/>";
 echo"<br/>";

 //array product function
 $myarray = array(1,2,3,4,5); 
 echo"product of array";
 echo array_product($myarray);
 echo"<br/>";
 echo"<br/>";

//array reverse function
$arr = array('php', 'c', 'c++', 'java', 'android');
echo"reverse the array";
$revarr = array_reverse($arr);
print_r($revarr);
echo"<br/>";
echo"<br/>";

// in array function
$temp = in_array('php',$arr); echo $temp;
echo "<br/>";
echo "<br/>";

// array_rand function
$arr = array('c', 'c++', 'java', 'android', 'php');
echo"Select multiple keys at random";
$indexofarray = array_rand($arr,2);//Returns Array Index

foreach ($indexofarray as $key => $value)
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
echo"<br/>";
echo "<br/>";

//array unique function
echo " array unique function <br/>";
print_r(array_unique($arr));
echo "<br/>";
echo "<br/>";

// array merge function
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
echo "merge the two array <br/>";
$NewArr	= array_merge($arr1,$arr2); 
print_r($NewArr);
echo "<br/>";
echo "<br/>";

// array search function
echo "search the specific array";
echo "<br/>";
$arr = array('c', 'c++', 'java', 'android', 'php');
print_r($arr);
echo "<br/>";
$check = array_search('android', $arr); 
echo $check;
echo "<br/>";
echo "<br/>";

//range function
$arr = range("11", "20"); 
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
}
?>
