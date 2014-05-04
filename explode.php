<?php

$fh = fopen("sport.txt", "r");

while(!feof($fh)){
	$current = trim(fgets($fh));
	$iArray[] = explode("*", $current);
}
$count = count($iArray);
for($x=0; $x<$count; $x++){
	$newArray[$x]["imageSrc"] = $iArray[$x][0];
	$newArray[$x]["title"] = $iArray[$x][1];
	$newArray[$x]["link"] = $iArray[$x][2];
	
}


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detik SPORT</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	<h1>Detik SPORT SCRAPE</h1>
	<?php
	foreach($newArray as $new){
		/*echo '<div class="video">';
		echo '<img src ="' .$new['imageSrc'] . '" alt="youtube image">';
		echo '<a href="' . $new['link'] . '"><h4>' . $new['title'] . '</h4></a>';*/

	
	echo '<table border="0" cellpadding="1" cellspacing="2">';
	echo '<tr class="row">';
	echo '<td><img src="' .$new['imageSrc']. '" width="60px" height="60px"  alt="image"></td>';
	echo '<td class="col"><a href="' .$new['link']. '"><h5>' .$new['title']. '</h5></a></td>';
	echo '</tr>';
	echo '</table>';
	}

	?>
	</div>
</body>
</html>
