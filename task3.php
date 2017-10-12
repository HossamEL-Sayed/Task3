<?php

$arrName  = [1,2,3,[3,4,5],4,'x',[3,4,5]];

$result=array_flatten($arrName);

print_r($result);

function array_flatten($arrName)
{	
	$res=array();

	foreach ($arrName as $value)
	{ 
		if (is_array($value))
		{
			foreach ($value as $element)
			{ 
				$res[]=$element;
			}
		}
		else
		{
			$res[]=$value;
		}
	}
return($res);
}
?>