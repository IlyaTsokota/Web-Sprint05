<?

function checkDivision($start = 1, $end = 60){
	for ($i=$start; $i <= $end ; $i++) { 
		$arr = array();
		echo('The number ' .$i . ' ');
		if ($i % 2 == 0){
			array_push($arr, 'is divisible by 2');
		}
		if ($i % 3 == 0){
			array_push($arr, 'is divisible by 3');
		}
		if ($i % 10 == 0){
			array_push($arr, 'is divisible by 10');
		}
		echo(implode(', ', $arr) .'\n');
		unset($arr);
	}
}

// echo "*** Range is 3 - 7 checkDivision(3,7) ***\n";
// checkDivision(3,7);
// echo "\n*** Range is 58 - ... checkDivision(58) ***\n";
// checkDivision(58);
// echo "\n*** Range is ... - ... checkDivision() ***\n";
// checkDivision();