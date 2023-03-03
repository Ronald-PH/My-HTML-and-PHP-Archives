<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<style>
* {
	padding: 0;
	margin: 0;
	font-family: courier;
}
body {
	background: black;
}
.container {
	position: relative;
	margin: auto;
	background-color: white;
	width: 500px;
	padding: 15px;
	margin-top: 5%;
}
select {
	border: none;
	text-decoration: none;
	width: 110px;
	font-size: 20px;
}
.year {
	width: 75px;
}
th {
	padding: 15px;
}
td {
	text-align: center;
	height: 50px;
}
th, td{
	border: 1px solid gray;
}
input {
	height: 30px;
	width: 100px;
	background-color: pink;
	border-radius: 5px;
}
.calendar {
	border: 1px solid gray;
	padding: 15px;
	border-top: 5px solid red;
}
.high {
	background-color: red;
	color: white;
}
</style>
</head>
<body>
<div class="container">
<center>
<div class="calendar">
	<?php 
	if(isset($_POST['gen'])) {
		$year = $_POST['year']; // Get Year of Input
		$month = $_POST['month']; // Get Month of Input
		$first = $month.'/1/'.$year; // Picker
		$first = strtotime($first); // To Run
		$total_day = date('t', $first); // Total of Days 
		$month = date('F', $first); // Full Name of Month
		$first_day = date('l', $first); // Name of Week First Day of Month 
		echo '<br>';
		echo '<h1>'.$month.'</h1>';
		echo '<h3>'.$year.'</h3>';
		echo '<br>';
		echo '<table>';
		echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';
		if($first_day == "Sunday") {
			echo '<tr>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 7) {
				echo '</tr><tr><td>8</td>';
				$day++;
			} else if ($day == 14) {
				echo '</tr><tr><td>15</td>';
				$day++;
			} else if ($day == 21) {
				echo '</tr><tr><td>22</td>';
				$day++;
			} else if ($day == 28) {
				echo '</tr><tr><td>29</td>';
				$day++;
			}
			}
			echo '</tr>';
		} else if($first_day == "Monday") {
			echo '<tr>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 6) {
				echo '</tr><tr><td>7</td>';
				$day++;
			} else if ($day == 13) {
				echo '</tr><tr><td>14</td>';
				$day++;
			} else if ($day == 20) {
				echo '</tr><tr><td>21</td>';
				$day++;
			} else if ($day == 27) {
				echo '</tr><tr><td>28</td>';
				$day++;
			}
			}
			echo '</tr>';
		} else if($first_day == "Tuesday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 5) {
				echo '</tr><tr><td>6</td>';
				$day++;
			} else if ($day == 12) {
				echo '</tr><tr><td>13</td>';
				$day++;
			} else if ($day == 19) {
				echo '</tr><tr><td>20</td>';
				$day++;
			} else if ($day == 26) {
				echo '</tr><tr><td>27</td>';
				$day++;
			}
			}
			echo '</tr>';
		} else if($first_day == "Wednesday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 4) {
				echo '</tr><tr><td>5</td>';
				$day++;
			} else if ($day == 11) {
				echo '</tr><tr><td>12</td>';
				$day++;
			} else if ($day == 18) {
				echo '</tr><tr><td>19</td>';
				$day++;
			} else if ($day == 25) {
				echo '</tr><tr><td>26</td>';
				$day++;
			}
			}
			echo '</tr>';
		} else if($first_day == "Thursday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 3) {
				echo '</tr><tr><td>4</td>';
				$day++;
			} else if ($day == 10) {
				echo '</tr><tr><td>11</td>';
				$day++;
			} else if ($day == 17) {
				echo '</tr><tr><td>18</td>';
				$day++;
			} else if ($day == 24) {
				echo '</tr><tr><td>25</td>';
				$day++;
			}
			}
			echo '</tr>';
		}  else if($first_day == "Friday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 2) {
				echo '</tr><tr><td>3</td>';
				$day++;
			} else if ($day == 9) {
				echo '</tr><tr><td>10</td>';
				$day++;
			} else if ($day == 16) {
				echo '</tr><tr><td>17</td>';
				$day++;
			} else if ($day == 23) {
				echo '</tr><tr><td>24</td>';
				$day++;
			} else if ($day == 30) {
				echo '</tr><tr><td>31</td></tr>';
				$day++;
			}
			}
			echo '</tr>';
		}  else if($first_day == "Saturday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 1) {
				echo '</tr><tr><td>2</td>';
				$day++;
			} else if ($day == 8) {
				echo '</tr><tr><td>9</td>';
				$day++;
			} else if ($day == 15) {
				echo '</tr><tr><td>16</td>';
				$day++;
			} else if ($day == 22) {
				echo '</tr><tr><td>23</td>';
				$day++;
			} else if ($day == 29) {
				echo '</tr><tr><td>30</td>';
				$day++;
			}
			}
			echo '</tr>';
		}
		echo '</table>';
	} else {
		$year = date('Y'); // Get Year of Input
		$month = date('m'); // Get Month of Input
		$first = $month.'/1/'.$year; // Picker
		$first = strtotime($first); // To Run
		$total_day = date('t', $first); // Total of Days 
		$month = date('F', $first); // Full Name of Month
		$first_day = date('l', $first); // Name of Week First Day of Month 
		$today = date('d');
		echo '<br>';
		echo '<h1>'.$month.'</h1>';
		echo '<h3>'.$year.'</h3>';
		echo '<br>';
		echo '<table>';
		echo '<th>Sun</th>';
		echo '<th>Mon</th>';
		echo '<th>Tue</th>';
		echo '<th>Wed</th>';
		echo '<th>Thu</th>';
		echo '<th>Fri</th>';
		echo '<th>Sat</th>';
		if($first_day == "Sunday") {
			echo '<tr>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 7) {
				echo '</tr><tr><td>8</td>';
				$day++;
			} else if ($day == 14) {
				echo '</tr><tr><td>15</td>';
				$day++;
			} else if ($day == 21) {
				echo '</tr><tr><td>22</td>';
				$day++;
			} else if ($day == 28) {
				echo '</tr><tr><td>29</td>';
				$day++;
			} else if ($day == $today) {
				echo '<td class="high">'.$today.'</td>';
				$day++;
			}
			}
			echo '</tr>';
		} else if($first_day == "Monday") {
			echo '<tr>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 6) {
				echo '</tr><tr><td>7</td>';
				$day++;
			} else if ($day == 13) {
				echo '</tr><tr><td>14</td>';
				$day++;
			} else if ($day == 20) {
				echo '</tr><tr><td>21</td>';
				$day++;
			} else if ($day == 27) {
				echo '</tr><tr><td>28</td>';
				$day++;
			} else if ($day == $today) {
				echo '<td class="high">'.$today.'</td>';
				$day++;
			}
			}
			echo '</tr>';
		} else if($first_day == "Tuesday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 5) {
				echo '</tr><tr><td>6</td>';
				$day++;
			} else if ($day == 12) {
				echo '</tr><tr><td>13</td>';
				$day++;
			} else if ($day == 19) {
				echo '</tr><tr><td>20</td>';
				$day++;
			} else if ($day == 26) {
				echo '</tr><tr><td>27</td>';
				$day++;
			} else if ($day == $today) {
				echo '<td class="high">'.$today.'</td>';
				$day++;
			}
			}
			echo '</tr>';
		} else if($first_day == "Wednesday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 4) {
				echo '</tr><tr><td>5</td>';
				$day++;
			} else if ($day == 11) {
				echo '</tr><tr><td>12</td>';
				$day++;
			} else if ($day == 18) {
				echo '</tr><tr><td>19</td>';
				$day++;
			} else if ($day == 25) {
				echo '</tr><tr><td>26</td>';
				$day++;
			} else if ($day == $today) {
				echo '<td class="high">'.$today.'</td>';
				$day++;
			}
			}
			echo '</tr>';
		} else if($first_day == "Thursday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 3) {
				echo '</tr><tr><td>4</td>';
				$day++;
			} else if ($day == 10) {
				echo '</tr><tr><td>11</td>';
				$day++;
			} else if ($day == 17) {
				echo '</tr><tr><td>18</td>';
				$day++;
			} else if ($day == 24) {
				echo '</tr><tr><td>25</td>';
				$day++;
			} else if ($day == $today) {
				echo '<td class="high">'.$today.'</td>';
				$day++;
			}
			}
			echo '</tr>';
		}  else if($first_day == "Friday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 2) {
				echo '</tr><tr><td>3</td>';
				$day++;
			} else if ($day == 9) {
				echo '</tr><tr><td>10</td>';
				$day++;
			} else if ($day == 16) {
				echo '</tr><tr><td>17</td>';
				$day++;
			} else if ($day == 23) {
				echo '</tr><tr><td>24</td>';
				$day++;
			} else if ($day == 30) {
				echo '</tr><tr><td>31</td></tr>';
				$day++;
			} else if ($day == $today) {
				echo '<td class="high">'.$today.'</td>';
				$day++;
			}
			}
			echo '</tr>';
		}  else if($first_day == "Saturday") {
			echo '<tr>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo '<td></td>';
			for($day=1; $day<=$total_day;$day++) {
			echo '<td>'.$day.'</td>';
			if($day == 1) {
				echo '</tr><tr><td>2</td>';
				$day++;
			} else if ($day == 8) {
				echo '</tr><tr><td>9</td>';
				$day++;
			} else if ($day == 15) {
				echo '</tr><tr><td>16</td>';
				$day++;
			} else if ($day == 22) {
				echo '</tr><tr><td>23</td>';
				$day++;
			} else if ($day == 29) {
				echo '</tr><tr><td>30</td>';
				$day++;
			} else if ($day == $today) {
				echo '<td class="high">'.$today.'</td>';
				$day++;
			}
			}
			echo '</tr>';
		}
		echo '</table>';
	

	}
	
	?>
	</div>
		<br>
		<form method="POST">
	<?php 
	echo '<select name="month">';
	for($m=1;$m<=12;$m++) {
		$year = 1950;
		$first = $m.'/1/'.$year;
		$first = strtotime($first);
		$month = date('F', $first);
		echo '<option value="'.$m.'">'.$month.'</option>';
	}
	echo '</select>';
	echo '<select class="year" name="year">';
	for ($year=2025; $year>=1950;$year--) {
		echo '<option value="'.$year.'">'.$year.'</option>';
	}
	echo '</select>';
	?>
	<input type="submit" name="gen" value="Change">
	</form>
</center>
</div>
</body>
</html>
