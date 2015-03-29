<?php
include('header.php');

if (is_array($searched) && $count > 1){
	echo "<p>The following $count results were sourced from: <a href='$source'>$source</a></p>";
	echo "<div class='results'><table>";
			echo"<td>Name</td>";
			echo"<td>Description</td>";
			echo"<td>Forks</td>";
		foreach ($searched as $key => $value){
			$name = $value->get_name();
			$description = $value->get_description();
			$forks = $value->get_forks();
			$url = $value->get_url();
			echo "<tr id=$key>";
				echo"<td><a href='$url'>$name</a></td>";
				echo"<td>$description</td>";
				echo"<td>$forks</td>";
			echo "</tr>";
		}
	echo "</table></div>";
} else {
	echo "<p>$searched were sourced from: <a href='$source'>$source</a></p>";
}

echo "<p><a href='/hello'>First Page</a></p>";

include('footer.php');