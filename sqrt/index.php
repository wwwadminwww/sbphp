<?php
class MySqrt
{
	private $value;
	private $precision;

	public function __construct($value,$precision){
		$this->value = $value;
		$this->precision = $precision;
	}

	/*The square root was calculated by Newton's method*/
	public function getSquareRoot()
	{
		if ($this->value > 0){
			$x = 1;
			while (abs($x * $x - $this->value) > 0.00001){
				$x = 0.5 * ($x + $this->value/$x);
			}
			return round($x,$this->precision);
		}elseif($this->value == 0){
			return 0;
		}else{
			return "Number cannot be less zero";
		}
	}
}

$a = new MySqrt(8,3);
echo $a->getSquareRoot();
?>
