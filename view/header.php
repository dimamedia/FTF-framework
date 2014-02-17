<?php

if($view == "doc") $docActive = "active";
elseif($view == "api") $apiActive = "active";
else $mainActive = "active";

print <<< html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="$title">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>$title</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

html;

include_once("analyticstracking.php");

print <<< html

<div class="container">

	<div class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">FTF-framework</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="$mainActive"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li class="$docActive"><a href="/doc"><span class="glyphicon glyphicon-info-sign"></span> Documentation</a></li>
					<li class="$apiActive"><a href="/api"><span class="glyphicon glyphicon-bookmark"></span> Api</a></li>
				</ul>
			</div>
		</div>
	</div>
	
html;

?>