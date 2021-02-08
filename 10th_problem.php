function leftShift($arr, $num) {
	$move = array_splice($arr, 0, $num % count($arr));
	return array_merge($arr, $move);
}

function rightShift($arr, $num) {
	return leftShift($arr, count($arr) - $num % count($arr));
}