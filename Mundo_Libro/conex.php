<?php 
	function Conectarse()
	{
		$link=mysql_connect("localhost","root","");
		if(!$link){
			exit();
		}
		$con=mysql_select_db("proyecto",$link);
		if(!$con){
			exit();
		}
		return $link;
	}
?>