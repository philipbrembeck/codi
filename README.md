Codi
==============

Codi is a light-weight CodeMirror-Wrapper.
You can use it as an HTML-, PHP-, CSS- JavaScript- or Mark-up/down- Editor. 

Informations
--------------

I needed a markdown/html/css editor for the web, as quick as possible.

So I found CodeMirror, which is super nice, but without a wrapper, it's not usable as a "real" online-based editor, because it would only fill one half of a page.
Codi is extremly simple, 100 lines of Code, light-weight and understandable for everyone who knows a little bit of JS!

Codi is a simple beginner editor for everyone who wants to learn HTML and the other languages.
This is the sourcecode - If you want to see Codi in action, visit [Codi (SSL; hosted on an external website)](https://jokenetwork.de/codi/).


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

You have to download the latest Version of Codemirror from their GitHub repository.
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

If you want to use "Export as HTML", you have to create a folder called "api" with chmod 777. I don't recommend doing this, until you know what you're doing.

