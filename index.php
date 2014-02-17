<?php

if(preg_match('/^\/doc(\/.*)?(\?.*)?$/', $_SERVER['REQUEST_URI']))	$view = "doc"; // Activate Documentation page
elseif(preg_match('/^\/api(\/.*)?(\?.*)?$/', $_SERVER['REQUEST_URI']))	$view = "api"; // Activate Api page
elseif(preg_match('/^\/(\?.*)?$/', $_SERVER['REQUEST_URI'])) $view = "main"; // Activate Home page
else $view = "404"; // Otherwise activate 404 error page

require("config.php");
require(VIEW."/header.php"); // Starting with a header file

require(VIEW."/$view.php"); // Selected content

require(VIEW."/footer.php"); // Ending with a footer file

?>