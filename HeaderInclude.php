<!--Here is a simple file that we will use to include both PHP and HTML into the files Index.html and AnotherPage.html-->
<!--Firstly we include the header in HTML which will be included on both pages.-->
<!--Writing the HTML
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<title>Header</title>
	</head>

	<body>
		<h1>Kierans Page</h1>
	</body>

</html>-->
<!--The html was included for clarity. We can simply write <h1>Kierans Page</h1> without any other HTML tags and it will work.
We shall write it this way-->
<h1>Kierans Page</h1>

<?php 
//In our PHP script we create two variables which will be included in the other two files (index.php and AnotherPage.php)

$variable1 = 'Index Page'.'<br/>';
$variable2 = 'Another Page'.'<br/>';

?>





