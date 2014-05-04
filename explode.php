<!DOCTYPE html>
<html>
<body>
<center>
<title> Real Madrid Headline News </title>
<h1>REAL MADRID NEWS</h1>
<table>
	<tr>
		<td></td>
		<td><center><img alt="logorealmadrid" src="logoreal.gif" height="20%" width="20%"></center></td>
		<td></td>
	</tr>
	<tr>
		<td width="20%"></td>
		<td>
<?php
$html = "";
$url = "http://www.goal.com/id-ID/feeds/team-news?id=124&fmt=rss&ICID=CP_124"; 
$xml = simplexml_load_file($url);
for($i = 0; $i < 10; $i++){

$title = $xml->channel->item[$i]->title;
$link = $xml->channel->item[$i]->link;
$description = $xml->channel->item[$i]->description;
$pubDate = $xml->channel->item[$i]->pubDate;
									
$html .= "<a href='$link' target='_blank'><h3>$title</h3></a>";
$html .= "$description<br>";
$html .= "<br> $pubDate<hr />";
} 
echo $html;
?>
		</td>
		<td width="20%"></td>
	</tr>
</table>
</center>
</body>
</html>
