      <div class="row marketing">
        <div class="col-sm-12">
          <h3>Documentation</h3>

          <h4><span class="glyphicon glyphicon glyphicon-th-list"></span> Hierarchy</h4>
          <p>FTF has basic hierarchy to keep stuff simple. Here is an example of this site as a demo.</p>
<pre>
- [root]
  - [app]                      // php functions and classes
    - page_apps.php            // example function
  - [css]                      // styles go here
    - bootstrap.css            // Bootstrap's main css
    - jumbotron-narrow.css     // Bootstrap's theme
  - [fonts]                    // fonts and glyphicons
    - glyphicons-halflings.*   // glyphicons used by Bootstrap
  - [js]                       // javascripts go here
    - bootstrap.js             // Bootstrap's scripts
  - [view]                     // views for each page or application templates
    - 404.php                  // 404 error page content
    - 500.php                  // 500 error page content
    - analytictracking.php     // Google Analytic
    - api.php                  // Api page content
    - doc.php                  // Documentation page content
    - footer.php               // Footer template and the ending of the whole site
    - header.php               // Header template and the starting of the whole site
    - main.php                 // Home page content
  - .htaccess                  // Apache configuration
  - config.php                 // Default parameters
  - error_redirect.php         // Error page controller
  - index.php                  // Main controller
</pre>
		<p>Bootstrap front-end can be replaced to whatever you want or write your own.</p>
		<p>When adding new page, remember to add them also to <i>index.php's</i> conditions.</p>
<pre>
// If new page file is <b>new.php</b> then add this line:

elseif(preg_match('/^\/<b>new</b>(\/.*)?(\?.*)?$/', $_SERVER['REQUEST_URI'])) $view = "<b>new</b>";
</pre>
		
          <h4><span class="glyphicon glyphicon glyphicon-refresh"></span> .htaccess</h4>
<pre>
ErrorDocument 404 /error_redirect.php?404  // In case if rewrite rule is not used
ErrorDocument 500 /error_redirect.php?500  // In case if rewrite rule is not used

RewriteEngine On                           // Enabling Rewrite engine
RewriteBase /                              // Just for sure
RewriteCond %{REQUEST_FILENAME} !-f        // Checking uri is not existed file
RewriteCond %{REQUEST_FILENAME} !-d        // Checking uri is not existed directory
RewriteRule ^(.*)\?*$ index.php/$1 [QSA,L] // Flowing the rest to the index.php controller
</pre>

          <h4><span class="glyphicon glyphicon glyphicon-cog"></span> Configuration</h4>
<pre>
# config.php

// Full path to the root
define("ROOT", "/www/ftframeworks");

define("APP", ROOT."/app"); 
define("VIEW", ROOT."/view"); 

$title = "Fuck The Frameworks -framework";
</pre>
		<p>While including files from <i>app</i> or <i>view</i> directories use:</p>
<pre>
require(APP."/someClass.php");
or
require(VIEW."/someAnalytics.php");
</pre>
		<p>Remember to avoid including files redundantly to <i>index.php</i> unless required to include to all pages.</p>

		<h4><span class="glyphicon glyphicon glyphicon-exclamation-sign"></span> License</h4>
		<p>The MIT License (MIT)</p>
		<p>Copyright &copy; 2014 FTF-framework</p>

<p>Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:</p>

<p>The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.</p>

<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.</p>
		
        </div>
      </div>

