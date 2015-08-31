<?php

//Here we create a simple class in PHP which contains two functions for drawing horizontal lines.
class DashedLine
{
	//Functions with a parameter and a return value creates a dahed line.
	function horizontalLine5px($color)
	{
		return  '<hr style="border: 5px dashed '.$color. '"/>';
	}
	
	function horizontalLine3px($color = 'red')//defualt value for the parameter
	{
		return  '<hr style="border: 3px dashed '.$color. '"/>';
	}
}

?>