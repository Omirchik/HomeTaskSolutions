<?php 
 	
	$maker=filter_input(INPUT_POST,"maker");
	$year=filter_input(INPUT_POST,"year");
	$model=filter_input(INPUT_POST,"model");
	$engine=filter_input(INPUT_POST,"cc");
	$price=filter_input(INPUT_POST,"price");
	$tax=filter_input(INPUT_POST,"tax");
	$tech=filter_input(INPUT_POST,"tech");
	$inv=filter_input(INPUT_POST,"inv");

	$t="";
	$te="";
	$i="";
	if ($tax=="on") {
		$t="yes";
	}else{
		$t="no";
	}
	if ($tech=="on") {
		$te="yes";
	}else{
		$te="no";
	}
	if ($inv=="on") {
		$t="yes";
	}else{
		$i="no";
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 <div>You added new item:<strong><?=$maker." ".$model?></strong></div>
 <div>produced in <?=$year." (".(2018-$year)." years old)"." with ".$engine." engine"?></div>
 <div>Tax payed:<strong><?=$t?></strong></div>
 <div>Technical check passed:<strong><?=$te?></strong></div>
 <div>Doesn't require investment:<strong><?=$i?></strong></div>
 <div>Price:$<?=$price?></div>
 </body>
 </html>