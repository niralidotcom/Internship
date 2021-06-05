<?php
// shuffle function
echo "shuffle function";
$arr = array("cricket", "football", "Boxing", "Tennis", "Hockey");

shuffle($arr);
foreach ($arr as $key => $value) {
echo "<br /> $value ";
}
echo "<br> <br>";
//array_key_exists ( )function
$arr = array("a" => "apple", "b" => "banana");
 echo array_key_exists('a',$arr);
 echo "<br/> <br/>";

 //array_change_key_case() function
 echo "array change key case function perform.<br/>";
 $arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER); 
print_r($uppercase);
echo "<br/> <br/>";

//array_combine()
echo " two array combine<br/>";
$arr1 = array("graps" , "banana" , "Mango");
$arr2 = array("green","Yellow", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
echo "<br/><br/>";

//end () fuction
$myarr = array('c', 'c++','php', 'android', 'java');//return the last array value
echo "perform end() function<br/>";
print_r($myarr);
echo "<br/>";
echo end($myarr);
echo "<br/> <br/>";

//compact() function
echo "perform the compact function <br/>";
$name = "Amisha";
$surname = "Patel";
$arr = compact("name", "surname"); 
print_r($arr);
echo "<br/> <br/>";

//array_flip() function
echo "perform array_flip() function <br/>";
$arr = array("a" => "amisha", "b" => "banana", "c" => "cat");
$fliparray = array_flip($arr);
print_r($fliparray);
echo "<br/> <br/>";

//array_diff() function
echo "perform array_diff() function <br/>";
$a=array("amisha","c","android","java","php","python");
$b=array("amisha","c","java","php");
$diff = array_diff($a, $b); print_r($diff);
echo "<br/><br/>";

//array_intersect() function
echo " perform array_intersect() <br/>";
$arr1 = array(0=>"amisha",1=>"nirali",2=>"asha");
$arr2 = array(3=>"arpita",4=>"amisha",5=>"nirali");
print_r(array_intersect($arr1,$arr2));
echo "<br/><br/>";

//array_values ( )
echo "perform array_values( )<br/>";
$arr = array("name"=>"amisha","surname"=>"patel");
$myarr = array_values($arr);
 foreach($myarr as $key => $value)
 {
 echo " <br />$key - $value";
}
echo "<br/><br/>";

//array_push() function
echo "perform array_push() function <br/>";
$a=array("java","php");
array_push($a,"android","python"); 
print_r($a);
echo "<br/><br/>";

//array_pop() function
echo "perform array_pop()function <br/>";
$a = array("java", "AJP", "php", "android", "python");
array_pop($a); //Remove print_r($a); 
array_pop($a); //Remove print_r($a);
echo "<br/><br/>";

//explode() function
echo "perform explode() <br/>";
$mystring = "I Love PHP Language";
$arr =	explode(" ",$mystring);

 print_r($arr);
 echo "<br/><br/>";

 //implode() function
 echo "perform implode()<br/> ";
 $arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
 echo $mystring;
?>



