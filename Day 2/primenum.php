<html>
<head>
<title>Prime Number</title>
</head>
<body>
<?php
  function IsPrime($n)
  {
  	for($x=2; $x<$n ; $x++)
  	{
  		if($n % $x == 0)
  		{
  			return 0;
  		}
  	}
  	return 1;
  }
  $a = IsPrime(7);
  if($a==0)
  {
  	echo "This is not a Prime Number";
  }
  else
  {
  	echo "This is a Prime Number";
  }

?>
</body>
</html>