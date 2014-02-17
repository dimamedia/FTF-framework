<?php
require("config.php");
require(VIEW."/header.php");

if($_SERVER['QUERY_STRING'] == "404") require(VIEW."/404.php");
elseif($_SERVER['QUERY_STRING'] == "500") require(VIEW."/500.php");

require(VIEW."/footer.php");

?>
