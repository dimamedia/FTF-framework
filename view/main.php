<?php

// path to an example app
require(APP."/page_apps.php");

// example function
jumbotron();

print <<< html
      <div class="row marketing">
        <div class="col-sm-6">
          <h4><span class="glyphicon glyphicon glyphicon-question-sign"></span> Wtf?</h4>
          <p>Yeah! This is actually php framework without a real framework. Just a basic scheme to start from. You can recreate this to whatever suits you.</p>

          <h4><span class="glyphicon glyphicon glyphicon-user"></span> For who?</h4>
          <p>For developers who got enough with frameworks and want to keep all stuff in their hands, in their way.</p>
        </div>
        <div class="col-sm-6">
          <h4><span class="glyphicon glyphicon glyphicon-gift"></span> What's included?</h4>
          <p>Simple url routing for SEO friendly urls.<br />
		  Demo with Bootstrap Narrow jumbotron theme.</p>

          <h4><span class="glyphicon glyphicon glyphicon-ok-sign"></span> Requirements</h4>
          <p>PHP 5.x<br />Apache2.x<br /><i>mod_rewrite</i> module enabled</p>
        </div>
      </div>
	  <div class="row marketing">
		<div class="col-sm-12">
		<h4><span class="glyphicon glyphicon glyphicon-bullhorn"></span> So, what's it all about?</h4>
		<p>I'm not going to tell you that frameworks are bad or good. The question is: Are these useful or useless for your need?<br />
		We can also ask whether the project need to be done fast, be dependant on framework, requires same framework knowledge from co-worker or post-developer. A lot of webapp developers are in a rush and have killing deadlines. So frameworks are their salvation.
		But if you have an opportunity to develop one project at a time with no hurry. You want to be Agile, follow DRY ideology, understand best practices in application designing. To get those you don't need to use frameworks, but experience in good programming. Writing clear code, keeping redundant stuff away and being independent makes application to be apprehensible for any co-worker and post-developer.<br />
		So lets stop battling and flooding our applications with frameworks and concentrate on creating pure and well designed applications.
		<blockquote class="blockquote-reverse">
		  <p>Reusable code is overrated a majority of the time. The focus should be on creating well designed software that is easily maintainable. Much more software can be built in a shorter time frame this way.</p>
		  <footer>Mike Mooney <cite title="Source Title"><a href="http://mooneyblog.mmdbsolutions.com/index.php/2010/12/07/the-framework-myth/" target="_blank">The Framework Myth 2010</a></cite></footer>
		</blockquote>
		<blockquote class="blockquote-reverse">
		  <p>If there is one thing more frightening than mapping your way through a maze of twisty little libraries, it’s getting mired in the framework swamp.</p>
		  <footer>Mike Taylor <cite title="Source Title"><a href="http://www.pragprog.com/magazines/2010-04/tangled-up-in-tools" target="_blank">PragPub April 2010</a></cite></footer>
		</blockquote>
		<blockquote class="blockquote-reverse">
		  <p>Bottom line: like most things that are sexy in web development right now, the proliferation of development frameworks only leads to complacency, missed opportunities for learning, and the lack of focus. We can do better.</p>
		  <footer>Cyle Gage <cite title="Source Title"><a href="http://cylesoft.com/blog/fuck-all-these-frameworks.html" target="_blank">Fuck all these frameworks 2013</a></cite></footer>
		</blockquote>
		</div>
	</div>
html;

?>