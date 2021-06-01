<html>
<head>
<title>Lip Year</title>
</head>
<body>
<?php 
  
function checkYear($year)  
{   
    return ((($year % 4 == 0) &&  
             ($year % 100 != 0)) ||  
             ($year % 400 == 0)); 
}  
$year = 2015;  
  
If (isLeap($year))  
	    {  
	        echo "$year  IS LEAP YEAR<br />\n";  
	    }  
	    else  
	    {  
	        echo "$year  IS Not leap year<br />\n";  
	    }  

	echo '<br>';
	echo '<br>';
	echo '<br>';
                 
?> 

<?php  
	function isLeap($year)  
	{  
	    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
	}  
	for($year=2000; $year<2021; $year++)  
	{  
	    If (isLeap($year))  
	    {  
	        echo "$year : LEAP YEAR<br />\n";  
	    }  
	    else  
	    {  
	        echo "$year : Not leap year<br />\n";  
	    }  
	}  
?>  
</body>
</html>