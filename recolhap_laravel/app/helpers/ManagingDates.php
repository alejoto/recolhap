<?php 
class ManagingDates{
	public function age ($birthdate) {
		$now=date('Y-m-d');
		$thisyear=(int)substr($now,0,4);
		$thismonth=substr($now,5,2);
		$today=substr($now,8,2);

		$this_month_and_day=$thismonth.$today;
		$this_month_and_day=(int)$this_month_and_day;

		$birthyear=(int)substr($birthdate,0,4);
		$birthmonth=substr($birthdate,5,2);
		$birthday=substr($birthdate,8,2);
		$birth_month_and_day=$birthmonth.$birthday;
		$birth_month_and_day=(int)$birth_month_and_day;

		if ($birth_month_and_day>$this_month_and_day) {
			$age= $thisyear-$birthyear-1;
		}  else {
			$age=$thisyear-$birthyear;
		}
		return $age;
	}
}

 ?>