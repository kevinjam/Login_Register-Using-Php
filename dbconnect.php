<?php
if(!mysql_connect("localhost","root",""))
{
	die('Oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("loginreg_db"))
{
	die('Oops database selection problem ! --> '.mysql_error());
}

?>