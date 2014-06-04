<?php 

if( isset($_GET['f']) )
{
	$f=$_GET['f'];
	include "functions/$f.php" ;
}
elseif (isset($_GET['p']))
{
	$p=$_GET['p'];
	include "content/$p.html" ;
}
else 
{
	include "content/home.html";
}


?>