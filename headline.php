<!DOCTYPE html>
<html>
<body background="197042_431320693589160_999032084_n.jpg">
<center>
<title> Real Madrid Headline News </title>
<table width="553" height="25" align="center" bgcolor="#000066">
<tr>
<td><font size="5" color="#FFFFFF" face="Lucida Sans Unicode, Lucida Grande, sans-serif"><p align="center">REAL MADRID NEWS</p></font></td>

</tr></table><br><br>
<table width="518" bgcolor="#7591DB">
	<tr>
		<td></td>
		<td><center><img alt="logorealmadrid" src="logoreal.gif" height="20%" width="20%"></center></td>
		<td></td>
	</tr>
	<tr>
		<td width="20%"></td>
		<td>
//memanggil element pada web http://www.goal.com/id-ID/feeds/team-news?id=124&fmt=rss&ICID=CP_124
<?php
$html = "";
$url = "http://www.goal.com/id-ID/feeds/team-news?id=124&fmt=rss&ICID=CP_124"; 
$xml = simplexml_load_file($url);
//melakukan perulangan variabel element yang di panggil dari website
for($i = 0; $i < 2; $i++){
//mengambil isi dari element title
$title = $xml->channel->item[$i]->title;
//mengambil isi dari element link yang akan digunakan sebagai link menuju website aslinya
$link = $xml->channel->item[$i]->link;
//mengambil isi dari element description
$description = $xml->channel->item[$i]->description;
//mengambil isi dari element pubDate yang merupakan waktu update berita pada website
$pubDate = $xml->channel->item[$i]->pubDate;
//menambahkan title yang sudah diambil dan dikombinasikan dengan linknya									
$html .= "<a href='$link' target='_blank'><h3>$title</h3></a>";
//menambahkan element description yang sudah diambil
$html .= "$description<br>";
//menambahkan tanggal atau waktu update berita dari web aslinya
$html .= "<br> $pubDate<hr />";
}
//menampilkan pada browser
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
		//memanggil dokumen sumber.xml dengan menggunakan DOM		
		<?php
			$dom= new DomDocument("1.0");
			//memanggil file isi dari sumber.xml
			$dom ->load("sumber.xml");
			//memanggil isi dari file dengan tag nama
			$tampilnama =$dom->getElementsByTagName("nama");
			//melakukan perulangan untuk menampilkan isi dari tag nama
			for ($i=0; $i<$tampilnama->length; $i++)
			{
				echo $tampilnama->item($i)->nodeValue."<br/>";
			}
		?>
					</td>
					<td>
		<?php
			$dom= new DomDocument("1.0");
			//memanggil file isi dari sumber.xml
			$dom ->load("sumber.xml");
			//memanggil isi dari file dengan tag npm
			$tampilnpm =$dom->getElementsByTagName("npm");
			//melakukan perulangan untuk menampilkan isi dari tag nama
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
