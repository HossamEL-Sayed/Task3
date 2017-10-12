<?php

$arrName  = [1,2,3,4,'x',[3,4,5]];

$result=array_flatten($arrName);

print_r($result);



function array_flatten($arrName)
{
	$arr_help=array();

	for ($i=0; $i <=count($arrName) - 1 ; $i++) 
	{ 
		if (count($arrName[$i]) > 1)
		{
			for ($j=0; $j <= count($arrName[$i]) - 1 ; $j++)
			{ 
				$arr_help[$j]=$arrName[$i][$j];
			}

			$x=$i;

			for ($k=0; $k <=count($arr_help) - 1 ; $k++) 
			{ 
				$arrName[$x]=$arr_help[$k];
				$x++;
			}
		}
	}
return($arrName);
}