<?php
include_once 'PHPClasses/Transaction.php';
//Here we have a simple Book class which allows use to set the title and price of a book. We will use this class in Index.php
class Books implements Transaction
{
	//Member variables
	protected $price; //Creating a protected variable, can be accessed from the class and any inheriting class
					  //This variable is protected because we are using it in an overidden function inside inheriting the Novel	class
	private $title;   //Here we create a private variable. This variable can only be accessed from this class, if we were using
					  //an overidding function in a child class	this would not be accessible
	
	//Constructor
	function Books($par1, $par2 )//using __construct() is also acceptable
	{							 //to release class resources the __destruct() function can be used
		$this->title = $par1;
		$this->price = $par2;
	}
	
	// Member functions
	function setPrice($par)//using the final keyword prevents overidding of the funtion by any child class.
	{
		$this->price = $par;
	}
	
	function getPrice()//this function can be overidden, no final keyword
	{
		echo $this->price .'<br/>';
	}
	
	function setTitle($par)
	{
		$this->title = $par;
	}
	
	function getTitle()
	{
		echo $this->title .'<br/>';
	}
	
	function buyBook($price)
	{
		echo 'Book bought, price was: '.$price.'<br/>';
	}
}

?>