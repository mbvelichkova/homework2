<html>
<head>



</head>

<body>
<br />
<?php
foreach(range(20,1000, 37) as $key=>$value)
		$array[$key]=$value;
//print_r($array);

function is_prime($m){
		$flag=true;
		for($i=2;$i<($m/2);$i++){
			if($m%$i==0)
				return false;
		}
		
		return true;
}

function find_3_prime(){
	global $array;
	$flag=0;
	foreach($array as $value){
		if(is_prime($value)){
			$flag++;
			if($flag==3){
				echo "$value <br>";
				$flag=0;
			}
		}
		
	}
}

function check_exists(){
	global $array;
	$exist_arr=array(146, 284, 871);
	
	for($i=0;$i<3;$i++){
		if(in_array($exist_arr[$i],$array))
			printf("The number %d exist in the array.<br>", $exist_arr[$i]);
		else
			printf("The number %d does not exist in the array.<br>", $exist_arr[$i]);
	}
	
	
}

find_3_prime();
check_exists();
?>



</body>
</html>
