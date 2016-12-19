<html>
<head>
<title>Chat</title>
</head>
<body>
<Form action="Save.php">
<?php
	 print $_GET['name'];
 ?>
	<input type="hidden" name="name"value="<?php print $_GET['name']; ?>">
	<input type="text" name="text">
	<input type="submit" value="Write">
</Form>
<hr>
<Form action = "./WC201.php?name= "<?php print $_GET ['name'] ?> >
	<input type="hidden" name= "name"value= "<?php print $_GET['name'] ;?>">
	<input type="submit" value= "Refresh" >
</Form>

<div style="border-style: solid ; border-width: 1px;">
<?php
	$fp = fopen('Chat.log', 'r');
	$i = 0;
	while( ($data = fgets($fp)) !== false){
		if($i >= 10) break;
	 	$buff = explode(',', $data);
		for($j = 0;$j < 3;$j++)
		{
	 		print $buff[$j];
			print("  ");
		}
		print("<br><hr>");
		$i++;
	}
	fclose($fp);
?>
</div>
<hr>
<form action="WC101.html">
	<A HREF="WC202.php" TARGET="_blank" >History</A>
	<input type="submit" value="Logout" >
</form>
</body>
</html>

