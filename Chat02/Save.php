<?php
	$currentData = file_get_contents('Chat.log');
	$fp = fopen('Chat.log', 'w');
	fwrite($fp, implode(",", [ $_GET['name'], $_GET['text'],date('Y-m-d H:i:s'),]));
	fwrite($fp, "\n");
	fwrite($fp, $currentData);
	fclose($fp);

	$data = urlencode($_GET['name']);
	header('Location:./WC201.php?name='.$data);
?>


