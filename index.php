<?php
	$date =  date('Y/m/d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
    
    echo "<br><br>";

    $dateDiff = $date - strtotime($tar);
    //echo "<br><br>The value of \$dateDiff: ".$dateDiff."<br>";
    echo "The value of compare date: ";
	if ($dateDiff < 0) {
		echo "The past<br>";;
	} elseif ($dateDiff > 0) {
		echo "<br>The future<br>";
	} else {
		echo "<br>Oops<br>";
	}

	echo "The value of '/' positions: ";
	$char = '/';
	$pos = -1;
	while (($pos = strpos($date, $char, $pos+1)) !== false) {
		echo "".$pos." ";
	}

    echo "<br>The value of number of words in \$date: ";
    echo str_word_count($date);

    echo "<br>The value of number of characters in \$date: ";
    echo strlen($date);

	echo "<br>The ASCII value of first character in \$date: ";
    echo ord($date[0]);

    echo "<br>The value of last two characters in \$date: ";
    echo substr($date, -2);

    echo "<br>Break \$date into an array and set “separator” parameter as “/“: ";
    $seperator = "/";
    $pieces = explode($seperator, $date);
	echo $pieces[0];
	echo " ";
	echo $pieces[1];   
	echo " ";
	echo $pieces[2];     

    echo "<br>Loop through the array \$year: ";
	foreach ($year as $yr) {
    $isLeapYear = (bool) date('L', strtotime("$yr-01-01"));
    printf(
        //'%d %s a leap year%s',
        //$yr,
        $isLeapYear ? 'True ' : 'False ',
        PHP_EOL
    );
}
?>