<?php
	
	$num = 5487;
	$num_o = $num;
	$revnum = 0;
	while ($num > 1)
	{
		$rem = $num % 10;
		$revnum = ($revnum * 10) + $rem;
		$num = ($num / 10);
	}

	echo "Reverse number of $num_o is: ".$revnum;
