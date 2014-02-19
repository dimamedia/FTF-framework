<?php

// This is an example function in an example app file
function jumbotron() {
	print <<< html
      <div class="jumbotron">
        <h2>Fuck The Frameworks <small>-framework</small></h2>
        <p class="lead">Your code. Your design. No dependencies.</p>
        <p><a class="btn btn-lg btn-success" href="https://github.com/dimamedia/ftf-framework/archive/master.zip" role="button"><span class="glyphicon glyphicon glyphicon-download"></span> Download</a></p>
	<p>
	<a href="https://twitter.com/share" class="twitter-share-button" data-text="Fuck The Framework -framework for pure design from scratch :)">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<iframe src="http://ghbtns.com/github-btn.html?user=dimamedia&repo=ftf-framework&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="90" height="20"></iframe>
	<iframe src="http://ghbtns.com/github-btn.html?user=dimamedia&repo=ftf-framework&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="90" height="20"></iframe>
	</p>
      </div>
html;
}

?>
