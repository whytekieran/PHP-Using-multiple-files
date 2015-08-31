<?php

//Here the class Novel is inheriting from Books. We will use this class in Index.php
class Novel extends Books
{
	var $publisher;
	
	function Novel($title, $price, $publisher) 
	{
		Books::Books($title, $price);//This statement is calling the base class constructor.
		$this->publisher = $publisher;
	}
	
	function getPrice()//Example of an overriden function
	{
		echo 'Child class funtion, price is: '.$this->price .'<br/>';
	}
	
	function setPublisher($par)
	{
		$this->publisher = $par;
	}
	
	function getPublisher()
	{
		echo $this->publisher. "<br />";
	}
}

?>