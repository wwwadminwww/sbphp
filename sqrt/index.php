<?php
class MySqrt
{
	/*The square root was calculated by Newton's method*/
	public function skrt($value,$precision)
	{
		if ($value > 0){
			$x = 1;
			while (abs($x * $x - $value) > 0.00001){
				$x = 0.5 * ($x + $value/$x);
			}
			return round($x,$precision);
		}elseif($value == 0){
			return 0;
		}else{
			return "Number cannot be less zero";
		}
	}
}

$a = new MySqrt;
echo $a->skrt(5,3);
?>
