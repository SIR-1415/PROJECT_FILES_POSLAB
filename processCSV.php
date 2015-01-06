<?php

if (!isset($_GET['file'])) {
	exit("error");
}

$file = $_GET['file'];

if (!is_file($file)) {
	exit("error");
}

if (!is_readable($file)) {
	exit("error");
}

$lines = file($file);

echo "<table>";
foreach ($lines as $line) {
	$values = explode(';',$line);
	echo "<tr>";
	foreach($values as $value) {
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo "</table>";

