<html>
<head>
<style type="text/css">
r
{
color:red;
text-align:center;
} 
b
{
color:blue;
text-align:center;
} 
</style>
</head>

<body>

<form  method="get">
number: <input type="text" name="number" />
</form>



<?php 
	
	//print_r(ctype_digit($_GET["number"]));
	
if($_GET){
	$m=$_GET["number"];
	
	if ((ctype_digit($_GET["number"]))==false){
		echo "<r> The parameter is not a number <br> </r>";
		}
  if (ctype_digit($_GET["number"])){
	if (($m<0)||($m>19999)){
		echo "<r> The parameteris is not within the range [0,19999] <br> </r>"; 
		}
	function is_prime($m){
		$flag=true;
		for($i=2;$i<($m/2);$i++){
			if($m%$i==0)
				return false;
		}
		
		return true;
	}
	if(is_prime($m)){
			printf('The number %d is prime !', $m );
	}
	if(is_prime($m)==false){
		printf('<b> The number %d is NOT prime !</b>', $m); 
	}
}
}
?>
	<br />




</body>
</html>
