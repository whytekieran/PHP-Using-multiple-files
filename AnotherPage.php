<?php

include_once 'HeaderInclude.php';//We use the include keyword to include external files and everything in them.
include_once 'PHPClasses/DashedLine.php';//Again using include_once to include a file which contains a class.

echo $variable2;//$variable2 was declared in HeaderInclude.php and we have included that file above.

echo DashedLine::horizontalLine3px();//We can call the function we which has been included from PHPClasses/DashedLine.php
//The function can be called as follows classname::function

?>