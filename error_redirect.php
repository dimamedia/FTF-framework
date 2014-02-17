<?php
require("config.php");
require("view/header.php");

if($_SERVER['QUERY_STRING'] == "404") require("view/404.php");
elseif($_SERVER['QUERY_STRING'] == "500") require("view/500.php");

require("view/footer.php");

?>