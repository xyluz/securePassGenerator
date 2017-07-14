<?php 

//arrays


function index($l){
	
	return generate($l,5,3);

} 

function generate($total_Length, $uppercase_length, $lowercase_length){
	
	$UPPER_CASE = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
	$lower_case = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
	$numbers = ["1","2","3","4","5","6","7","8","9","0"];
	$symbols = ["*","#","@","!","(",")","&","^","%","$","~","/","]","[","{","}","?",">","<",";"];

	$u = randomizeArray($UPPER_CASE,$uppercase_length);
	$l = randomizeArray($lower_case,$lowercase_length);
	$n = randomizeArray($numbers,3);
	$s = randomizeArray($symbols,3);
	$merge = array_merge($u,  $l , $n , $s);

	shuffle($merge);

	$split = implode('',$merge);

	return substr($split, 0, $total_Length);

	

}

function randomizeArray(array $array, $length){
	$result = [];	
	$counted = count($array);
	if($length > $counted){
		return "length too long";
	}else{

		for($i = 0; $i <= $length; $i++){
			array_push($result,$array[rand(0,$counted-1)]);
		}

	}	
	return $result;

}

