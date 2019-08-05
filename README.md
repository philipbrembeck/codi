<p align="center"><img src="http://jokenetwork.de/img/logo.svg" alt="Logo" height="200px"><br><img src="http://cl.ly/image/061l3E2a2A2k/jkntwrk.png" alt="Webdesign &amp; WebApps"></p>

Codi
==============

Codi is a light-weight CodeMirror-Wrapper.
You can use it as an HTML-, PHP-, CSS- JavaScript- or Mark-up/down- Editor. 

Informations
--------------

Codi was fully developed in 2015. 
We wanted to have an editor with us, no matter where we go. No nice apps existed at this point (especially for iOS), so we built our own light-weight one, based on HTML, JavaScript and a bit of PHP.

Our own markup-highlighter didn't work as we exspected.
So we looked for an alternative and we found [CodeMirror](https://github.com/jokenetwork/CodeMirror/).
CodeMirror is super nice, but without a wrapper, it's not usable as a "real" online-based editor, because it would only fill one half of a page.
Codi is extremly simple, 100 lines of Code, light-weight and understandable foreveryone who knows a little bit of PHP and JS!

Codi is a simple beginner editor for everyone who wants to learn HTML and the other languages.
This is the sourcecode - If you want to see Codi in action, visit [Codi (SSL; hosted on an external website)](https://jokenetwork.de/codi/).

Sadly, we can't focus on the Development of Codi anymore, so now it's your turn, if you want to.

Codi was the first part of our learning process and now we're looking into the future, into new projects. 

Sincerely,
The [JokeNetwork](https://jokenetwork.de/ref/codi-git) Team


What do I need to know?
--------------

index.php

This is the head-section of Codi - Here, we include the CSS-Stylesheets. If you want to use a personalized Stylesheet, palce it here.

    <!-- Base CSS --> 
    <link rel="stylesheet" href="...."> <!-- Your own stylesheet here -->
    <link rel="stylesheet" href="lib/codemirror.css"> <!-- CodeMirror: DON'T DELETE THIS -->
    
This is the JavaScript-section -  It's located on the end of the index's body, to improve the speed of your site, the CodeMirror libarys are included here.

    <!-- Base JS (On the bottom of body) -->
    <script src="lib/codemirror.js"></script>
    <script src="mode/xml/xml.js"></script>

You have to download the latest Version of Codemirror from here: https://github.com/jokenetwork/CodeMirror/.
Unzip and upload it to the same directory as your index.php.

Now, let's wrap it!
--------------
Okay, that's the most important part of Codi. Because CodeMirror doesn't allow 100% width and 100% height (it just doesn't work), we need a little bit of JavaScript:

            <script>
    		var delay; 
			var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
				mode: 'text/html',
				tabMode: 'indent',
				indentWithTabs: true,
				smartIndent: false,
				lineNumbers: true
			 });
			
			 $(document).ready(function(){
			
				// Resize the DIV with ID Codi
				$("#codi").css({height: $(window).height() - $("#header").height() - 1});
				$(window).resize(function(){
					$("#codi").css({height: $(window).height() - $("#header").height() - 1});
				});
			 });
		     </script>

That's all! You're good to go :)

Export as HTML
--------------

If you want to use "Export as HTML", you have to create a folder called "api" with chmod 777. We don't recommend doing this, if you don't know what you're doing.

