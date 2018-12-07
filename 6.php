<?php
	$fp = fopen("counter.txt", "r");
	$count = fread($fp,1024);
	fclose($fp);
	$count += 1;
	echo "Page Views: " . $count ;
	$fp = fopen("counter.txt", "w");
	fwrite($fp,$count);
	fclose($fp);
?>