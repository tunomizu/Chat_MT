<?php
if($_GET['name'] == '')
{
	print '<meta http-equiv="refresh" content="0;URL=./ER001.html">';
}
else 
{
	$data = urlencode($_GET['name']);
	header('Location:./WC201.php?name='.$data);
}
?>
