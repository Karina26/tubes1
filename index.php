<?php
require_once 'xpath.php';
set_time_limit(0);
$startUrl = "http://sport.detik.com/sepakbola?st70";

// anchor text "//h3[@class= 'l_yellow_detik']/a/text()"
// anchor href "//h3[@class= 'l_yellow_detik']/a/@href"
// anchor img src 1 "//li[@class= 'first']//img/@src"


function scrapedetiksportbola($url){
	$baseUrl = "http://sport.detik.com/";
	$array = array();
	$xpath = new XPATH($url);	

	$imageSrcQuery = $xpath->query("//ul[@class= 'list_berita_1']//li//img/@src");
	$linkTitleQuery = $xpath->query("//h3[@class= 'l_yellow_detik']/a/text()");
	$linkHrefQuery = $xpath->query("//h3[@class= 'l_yellow_detik']/a/@href");
	//$linkOwnerQuery = $xpath->query("//td[@class='pl-video-owner']/a/text()");
	//$linkOwnerHrefQuery = $xpath->query("//td[@class='pl-video-owner']/a/@href");
	//$linkTimestampQuery = $xpath->query("//div[@class='timestamp']");

	$fh = fopen("sport.txt", "a+");
	for($x=0; $x<$linkHrefQuery->length; $x++){

		$string = $array[$x]['imageSrc'] = $imageSrcQuery->item($x)->nodeValue ."*";
		$string .= $array[$x]['linkTitle'] = $linkTitleQuery->item($x)->nodeValue ."*";
		$string .= $array[$x]['linkHref'] = $baseUrl . $linkHrefQuery->item($x)->nodeValue;
		//$string .= $array[$x]['linkOwner'] = $linkOwnerQuery->item($x)->nodeValue ."*";
		//$string .= $array[$x]['linkOwnerHref'] = $baseUrl . $linkOwnerHrefQuery->item($x)->nodeValue ."*";
		//$string .= $array[$x]['linkTimestamp'] = $linkTimestampQuery->item($x)->nodeValue ."*";

		fwrite($fh, $string ."\n");
		//$array[$x]['imageSrc'] = $imageSrcQuery->item($x)->nodeValue;
		//$array[$x]['linkTitle'] = $linkTitleQuery->item($x)->nodeValue;
		//$array[$x]['linkHref'] = $baseUrl . $linkHrefQuery->item($x)->nodeValue;
		//$array[$x]['linkOwner'] = $linkOwnerQuery->item($x)->nodeValue;
		//$array[$x]['linkOwnerHref'] = $baseUrl . $linkOwnerHrefQuery->item($x)->nodeValue;
		//$array[$x]['linkTimestamp'] = $linkTimestampQuery->item($x)->nodeValue;

	}
	fclose($fh);
	return $array;
}

$data = scrapeIFUNSIL("http://sport.detik.com/sepakbola?st70");


echo "<pre>";
print_r($data);
