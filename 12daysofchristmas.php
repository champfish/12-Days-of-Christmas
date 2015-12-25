<html>
	<head>
		<title>12 Days of Christmas</title>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<h1>12 Days of Christmas</h1>
			<?php
			$num = array (
				'a',
				'Two',
				'Three',
				'Four',
				'Five',
				'Six',
				'Seven',
				'Eight',
				'Nine',
				'Ten',
				'Eleven',
				'Twelve',
			);
			$gift = array (
				'Partridge in a Pear Tree',
				'Turtle Doves',
				'French Hens',
				'Calling Birds',
				'Golden Rings',
				'Geese a-Laying',
				'Swans a-Swimming',
				'Maids a-Milking',
				'Ladies Dancing',
				'Lords a-Leaping',
				'Pipers Piping',
				'Drummers Drumming',
			);
			$ordinal = array (
				'First',
				'Second',
				'Third',
				'Fourth',
				'Fifth',
				'Sixth',
				'Seventh',
				'Eighth',
				'Ninth',
				'Tenth',
				'Eleventh',
				'Twelfth',
			);
			for ( $i = 0; $i < 12; $i++ ) {
				echo "<p>On the " . $ordinal[$i] . " day of Christmas, my true love gave to me<br />";
				for ( $j = $i; $j >= 0; $j-- ) {
					echo ( $i != 0 && $j == 0 ? "and " : "" ) . $num[$j] . " " . $gift[$j] . ( $j == 0 ? "." : "," ) . "<br />";
				}
				echo "</p>";
			}
			?>
			<a name="stats"></a><h2>Stats</h2>
			<p>In total, there are...</p>
			<ul>
			<?php
			$totalnum = array();
			for ( $k = 0; $k < 12; $k++ ) {
				if ( $k == 0 ) {
					echo "<li>12 Partridges in Pear Trees</li>";
				} else {
					$totalnum[$k] = (12 - $k) * ($k + 1);
					echo "<li>" . $totalnum[$k] . " " . $gift[$k] . "</li>";
				}
			}
			?>
			</ul>
		</div>
	</body>
</html>
