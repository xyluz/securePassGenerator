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

function generateUsername(){
	//randomly generate username

	$one_letter_words = ["a","i"];
	$two_letter_words = ["jo","za","qi","ox","ex","ax","by","my","up","of","ma","am","pi","be","aw","om","bo","ah"];
	$three_letter_words = ["bio","bow","cob","caw","con","cos","bag","box","bug","cay","bus","axe","bee","bae","art","bad","cry","gap","gay","ged","pee"];
	$four_letter_words = ["dozy","lazy","jefe","flux","jazz","fuzzy"];

	$result = "";

	for($i = 0; $i < 2; $i++){

		$rad = rand(1,4);

		switch ($rad) {
			case 1:
				$result .= toString(randomizeArray($one_letter_words,1));
				break;
			case 2:
				$result .= toString(randomizeArray($two_letter_words,1));
				break;
			case 3:
				$result .= toString(randomizeArray($three_letter_words,1));
				break;
			case 4:
				$result .= toString(randomizeArray($four_letter_words,1));
				break;
			default:
				$result = "username";
				break;
		}

	}

	return $result;

}

function toString($array){
	return implode('',$array);
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



function export_as_txt($password, $username){
	//export my password as a text file
	$file = $username . '.txt';
	
	$current = file_get_contents($file);	
	$current .= "Password: " . $password . "\n \n \n";	
	$current .= "Created today " . date("Y/m/d") . " with free secure password generator by xyluz.com";	
	file_put_contents($file, $current);
	return $file;

}

