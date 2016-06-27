<?php
	$conn = @mysql_connect('localhost','root','');
	mysql_select_db('ttcn1',$conn);
	mysql_query("set names 'utf8'");
?>