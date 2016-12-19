<html>
    <head>
        <title>Chat-History</title>
    </head>
    <body>
	<h1>Chat-History</h1>
	<Form>
		<input type="submit" value="Refresh" >
	</Form>
	<div style="border-style: solid ; border-width: 1px;">
	<?php
		$fp = fopen('Chat.log', 'r');
		while( ($data = fgets($fp)) !== false){
	 		$buff[] = explode(',', $data);
		}
		fclose($fp);
		for($i = Count($buff) - 1;$i>=0;--$i)
		{
			for($j = 0;$j < 3;$j++)
			{
	 			print $buff[$i][$j];
				print("  ");
			}
			print("<br>""<hr>");
			}
	?>
	</div>
	<Form>
		<input type="submit" value="Refresh" >
	</Form>
	<Form onClick="javascript:window.close();">
		<input type="submit" value="Close" >
	</Form>
    </body>
</html>
