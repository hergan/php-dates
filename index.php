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
	echo "New Years Day is: " . "$newYearDay" . "<br>" . "<br>";
	
	//calc good friday from easter day minus two days 
	$goodFriday = date('U', easter_date() - 172800); 
	echo "Good Friday is: " . "$goodFriday" . "<br>" . "<br>";

	//cacls Memorial Day
	$memorialDay = date('U', strtotime("last monday of may"));
	echo "Memorial Day is: " . "$memorialDay" . "<br>" . "<br>";

	//cacls Independence Day
	$independenceDay = date('U', strtotime("july 4"));
	echo "Independence Day is: " . "$independenceDay" . "<br>" . "<br>";

	//cacls Labor Day
	$laborDay = date('U', strtotime("first monday of september"));
	echo "Labor Day is: " . "$laborDay" . "<br>" . "<br>";

	//cacls Thanksgiving Day
	$thanksgivingDay = date('U', strtotime("fourth thursday of november"));
	echo "Thanksgiving Day is: " . "$thanksgivingDay" . "<br>" . "<br>";

	//cacls Friday after Thanksgiving
	$fridayAfterThanksgiving = $thanksgivingDay + 86400;
	echo "The Friday after Thanksgiving Day is: " . "$fridayAfterThanksgiving" . "<br>" . "<br>";

	//cacls Christmas Eve
	$chirstmasEve = date('U', strtotime("december 24"));
	echo "Chirstmas Eve is: " . "$chirstmasEve" . "<br>" . "<br>";

	//cacls Christmas Day
	$chirstmasDay = date('U', strtotime("december 25"));
	echo "Chirstmas Day is: " . "$chirstmasDay" . "<br>" . "<br>";

	$holidaysOff = array($newYearDay, $goodFriday, $memorialDay, $independenceDay, $laborDay, $thanksgivingDay, $fridayAfterThanksgiving, $chirstmasEve, $chirstmasDay);
	$arrLength = count($holidaysOff);

	for ($i = 0; $i < $arrLength; $i++) { 
		echo $holidaysOff[$i] . "<br>". "<br>";
	}


	
	//calculates second thurs in UNIX
//	$secondThurs = date('U', strtotime("second thursday of this month"));
//	echo "$secondThurs" . "<br>";

?>


</body>
</html>