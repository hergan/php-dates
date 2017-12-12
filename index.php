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

	//cacls Thanksgiving Day
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

	//calculates second thurs in UNIX
	$secondThurs = date('U', strtotime("second thursday of this month"));

	// compares $secondThurs var to holidaysOff array 
	if (array_search ($secondThurs, $holidaysOff))
	{
		echo "Office is closed";
	}
	else 
	{
		$formDate = date_create_from_format("U",$secondThurs);
		echo date_format($formDate, "l, F j");
	}


?>


</body>
</html>