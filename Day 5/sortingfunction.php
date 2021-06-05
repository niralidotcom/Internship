<?php
// 1.sort function
echo"sorting function <br/>";
$arr = array(80,60,50,40,8,74); 
sort($arr);
print_r($arr);
echo "<br/>";
echo "<br/>";

// 2.rsort function
echo "rsort function <br/>";
rsort($arr);
print_r($arr);
echo "<br/>";
echo "<br/>";

//3.asort function
echo "asort function <br/>";
asort($arr);
print_r($arr);
echo "<br/>";
echo "<br/>";

//4.key sort function
echo "key sort function <br/>";
$arr = array(
"graps" => "red", "Apple" => "green",
"banana" => "pink");
print_r($arr);
ksort($arr);
foreach ($arr as $key => $value) 
	{ echo "<br />$key - $value ";
}
echo "<br>";

//5.key reverse sort function
echo "key reverse sort function";
krsort($arr);
foreach ($arr as $key => $value) { echo "<br />$key - $value ";}
?>