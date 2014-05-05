<!DOCTYPE html>
<html>
<body bgcolor="#FFFFCC">
<center>
<title> Real Madrid Headline News </title>
<table width="553" align="center">
<tr>
<td><font color="#FF3300" face="><marquee direction="left"><h1><p align="center">REAL MADRID NEWS</h1></p></marquee></font></td>

</tr></table>
<table width="504">
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
for($i = 0; $i < 2; $i++){

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
	<tr>
		<td><center><img alt="logorealmadrid" src="logoreal.gif" height="20%" width="20%"></center></td>
		<td>
			<h1>Dibuat oleh :</h1>
			<table>
				<tr>
					<td>
		<?php
			$dom= new DomDocument("1.0");
			$dom ->load("sumber.xml");
			$tampilnama =$dom->getElementsByTagName("nama");
			for ($i=0; $i<$tampilnama->length; $i++)
			{
				echo $tampilnama->item($i)->nodeValue."<br/>";
			}
		?>
					</td>
					<td>
		<?php
			$dom= new DomDocument("1.0");
			$dom ->load("sumber.xml");
			$tampilnpm =$dom->getElementsByTagName("npm");
			for ($i=0; $i<$tampilnpm->length; $i++)
			{
				echo $tampilnpm->item($i)->nodeValue."<br/>";
			}
		?>
					</td>
			</tr>
		</table>
		</td>
		<td></td>
	</tr>
</table>
</center>
</body>
</html>
