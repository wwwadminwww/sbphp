<?php
function checkLeapYear($year){
	if ((($year%4)==0 && ($year%100)!=0) || ($year%400 == 0)){
		return true;
	}else{
		return false;
	}
}

function countFriday($year_from, $year_to)
{
	$count = 0;
	for ($i=$year_from;$i<=$year_to;$i++){
		if (checkLeapYear($i)){
			$first_jan = $i."-01-01";
			for ($j=1;$j<366;$j++){
				$temp_date = strtotime($first_jan ."+". $j . "day");
				if (getdate($temp_date)['mday'] == 13 && getdate($temp_date)['weekday'] == 'Friday'){
					$count++;
					// echo "<pre>".print_r(getdate($temp_date),true)."</pre><br />";
				}
			}
		}
	}
	echo "Quantity of Friday 13 for this period ".$year_from." - ".$year_to." is = ".$count;
}

countFriday(2000,2020);
?>