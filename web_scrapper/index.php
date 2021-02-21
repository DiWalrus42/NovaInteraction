<?php
	include("simple_html_dom.php");
	$html=file_get_html("http://evangeli.net/evangile/widget/web");
	$text=$html->find("#evangeli_mail div div p",1)->innertext;
	echo $text;
?>