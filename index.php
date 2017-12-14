<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php dates</title>
</head>
<body>

<?php 

	// 1 day = 86400

	//set timezone for calculating correct UNIX dates
	date_default_timezone_set('America/Chicago');

	//cacls New Years Day
	$newYearDay = date('U', strtotime("first day of january"));

	//calc good friday from easter day minus two days 
	$goodFriday = date('U', easter_date() - 172800); 

	//cacls Memorial Day
	$memorialDay = date('U', strtotime("last monday of may"));

	//cacls Independence Day
	$independenceDay = date('U', strtotime("july 4"));

	//cacls Labor Day
	$laborDay = date('U', strtotime("first monday of september"));

	//cacls Thanksgiving Da
	$thanksgivingDay = date('U', strtotime("fourth thursday of november"));

	//cacls Friday after Thanksgiving
	$fridayAfterThanksgiving = $thanksgivingDay + 86400;

	//cacls Christmas Eve
	$chirstmasEve = date('U', strtotime("december 24"));

	//cacls Christmas Day
	$chirstmasDay = date('U', strtotime("december 25"));

	//cacls Day after Christmas
	$dayAfterChirstmas = date('U', strtotime("december 26"));

	$holidaysOff = array($newYearDay, $goodFriday, $memorialDay, $independenceDay, $laborDay, $thanksgivingDay, $fridayAfterThanksgiving, $chirstmasEve, $chirstmasDay, $dayAfterChirstmas);

	//calculates seminar dates in UNIX
	$seminarDate1 = date('U', strtotime("first thursday of this month"));
	$seminarDate2 = date('U', strtotime("second tuesday of this month"));
	$seminarDate3 = date('U', strtotime("second thursday of this month"));
	$seminarDate4 = date('U', strtotime("third tuesday of this month"));			
	$seminarDate5 = date('U', strtotime("third thursday of this month"));	

	function validate($seminarDate) {	
		while($date_flag == 0)
		{
			$key = array_search($seminarDate, $holidaysOff);
			// is it Tuesday or Thursday

			if (($key == FALSE) && (date("N", $seminarDate) != 6) && (date("N", $seminarDate) != 7))
				$date_flag = 1;
			else
			{
				$date_flag = 0;
				$seminarDate = date('U', strtotime('+86400 seconds', $seminarDate));
			}
		}
		$formDate = date_create_from_format("U",$seminarDate);
		echo date_format($formDate, "l, F j") . "<br>";
	}

	validate($seminarDate1);
	validate($seminarDate2);
	validate($seminarDate3);
	validate($seminarDate4);
	validate($seminarDate5);

?>


</body>
</html>