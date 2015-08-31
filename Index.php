<?php

//Both the include and require keywords can be used and perform slightly differently. include will run the page regardless if the
//file to be included with it exists or not. require on the other hand, will kill the page if it cannot find the file to be included
//We can also use include_once and require_once. This way the file is checked to see if it has already been included or 
//required and if it has been. It will not include or require it a second time.

include_once 'HeaderInclude.php';//Here we use the include_once keyword to include external files and everything in them.
include_once 'PHPClasses/DashedLine.php';//Again using include_once to include a file which contains a class.
include_once 'PHPClasses/Books.php';//Using another class contained in the PHPClasses folder.
include_once 'PHPClasses/Novel.php';//Including Novel.php which contains the Novel class that inherites from Books.
include_once 'PHPClasses/Transaction.php';//Including Novel.php which contains the Novel class that inherites from Books.

echo $variable1;//$variable1 was declared in HeaderInclude.php and we have included that file above.

//Creating three book objects which we can do as we have included 'PHPClasses/Books.php'
$physics = new Books("Physics Book", 9.99);
$maths = new Books("Mathemathics", 14.99);
$computers = new Books("Software Book", 7.99);

//Calling the functions which will echo out the Title and Price.
$physics->getTitle();
$maths->getTitle();
$computers->getTitle();

$physics->getPrice();
$maths->getPrice();
$computers->getPrice();

//Creating a new Book object and using the function created from the classes implemented interface Transaction
$book = new Books("Story", 5.99);
$book->buyBook(10);

//Creating a Novel object which inherites from Books
$harryPotter = new Novel("Harry Potter", 12.99, "Puffin Books");
$harryPotter->getTitle();
$harryPotter->getPrice();
$harryPotter->getPublisher();

echo DashedLine::horizontalLine3px();//We can call the function we which has been included from PHPClasses/DashedLine.php
									 //The function can be called as follows classname::function	
									 


?>