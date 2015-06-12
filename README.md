<p align="center"><img src="http://jokenetwork.de/img/logo.svg" alt="Logo" height="200px"><br><img src="http://cl.ly/image/061l3E2a2A2k/jkntwrk.png" alt="Webdesign &amp; WebApps"></p>

Codi
==============

Codi is a light-weight CodeMirror-Wrapper
You could use it as an HTML-, PHP-, CSS- JavaScript- or Mark-up/down- Editor. 

Informations
--------------

We began to develop Codi almost 1 year ago. 
When we didn't have the money to buy editors such as [Coda by Panic](http://www.panic.com/coda/), [SublimeText](http://www.sublimetext.com) or [Adobe's Dreamweaver](http://www.adobe.com/de/products/dreamweaver.html) (which we use today, they're super awesome) we started the development of Codi. 
A simple code-editor for HTML, JavaScript, CSS and PHP. 

First, we wrote our own Markup-Highlighter, which took like forever and in the end, it looked like sh*t. 4000 lines of code. For nothing. 
So we looked for an alternative and we found [CodeMirror](https://github.com/jokenetwork/CodeMirror/).
Yeah, CodeMirror is nice, but without a wrapper, it's not usable as a "real" online-based editor, because it would only fill one half of a page..
Codi is extremly simple, 100 lines of Code, light-weight and understandable foreveryone who knows a little bit of PHP and JS!

Codi is a simple beginner editor for everyone who wants to learn HTML and the other languages.
This is the sourcecode - If you want to see Codi in action, visit [Codi (SSL; hosted on an external website)](https://jokenetwork.de/codi/).

Sadly, this is the end of Codi..
We won't delete this page, but there will be no updates or something. 
Maybe, no one will ever use this for something, but maybe we can help someone with this, so, why not?

Codi was the first part of our learning process and now we're looking into the future, into new projects. 
Thanks to every user, to every supporter and thanks to everyone else!

Sincerely,
The [JokeNetwork](https://jokenetwork.de/ref/codi-git) Founder-Team


[List of supporters](http://cldsi.de/1iR1lmX)


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
Okay, that's the most important part of Codi. Because CodeMirror doesn't allow 100% widht and 100% height (it just don't work), we need a little bit of JavaScript:

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

If you want to use "Export as HTML", you have to create a folder called "api" with chmod 777.

Do it!

