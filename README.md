<p align="center"><img src="http://jokenetwork.de/img/logo.svg" alt="Logo" height="200px"><br><b>JokeNetwork</b></p>

Codi
==============

Codi is a little CodeMirror-Wrapper / You could use it as an HTML-, PHP-, CSS- JavaScript- or Mark-up/down- Editor

----
News
--------------

We began to develop Codi almost 1 year ago. 
When we didn't have the money to buy editors such as [Coda by Panic](http://www.panic.com/coda/) or [Adobe's Dreamweaver](http://www.adobe.com/de/products/dreamweaver.html) (which we use today, they're super awesome) we started the development of Codi. A simple code-editor for HTML, JavaScript, CSS and PHP. 
First, we wrote our own Markup-Highlighter, which took like forever and in the end, it looked like sh*t. So wee looked for an alternative and we found [CodeMirror](https://github.com/jokenetwork/CodeMirror/).
Our first index-page of codi was as long as 4000 lines of code. Today, Codi is a 100 lines CodeMirror-Wrapper with some extra features - The source of Codi is realy, realy simple. And that's good, because anyone can understand it.

Codi is a simple beginner editor for everyone who wants to learn HTML and the other languages.
This is the sourcecode - If you want to see Codi in action, visit [Codi (Non-SSL)](http://codi.jokenetwork.de) or [Codi (SSL)](https://jokenetwork.de/codi/), we'll not delete the Codi page ever.
Sadly, this is the end of Codi.

That was our learning process and now we're looking into the future, into new projects. Thanks to every user, to every supporter and thanks to everyone!

Sincerely,
The [JokeNetwork](https://jokenetwork.de/ref/codi-git) Founder-Team


[List of supporters](http://cldsi.de/1iR1lmX)

----


What do I need to know?
--------------

index.php

This is the head-section of Codi - Here, we include the CSS-Stylesheets. If you want to use a personalized Stylesheet, palce it here.

    <!-- Base CSS --> 
    <link rel="stylesheet" href="....">
    <link rel="stylesheet" href="lib/codemirror.css">
    
This is the JavaScript-section -  It's located on the end of the index's body, the CodeMirror libarys are included here.

    <!-- Base JS (On the bottom of body) -->
    <script src="lib/codemirror.js"></script>
    <script src="mode/xml/xml.js"></script>

You have to download the latest Version of Codemirror from here: https://github.com/jokenetwork/CodeMirror/.
Unzip and upload it to the same directory as your index.php.

Now, let's wrap it!
--------------
Okay, that's the most important part of Codi. Because CodeMirror doesn't allow 100% widht and 100% height, we need a little bit of JavaScript:

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
			
				
				$("#codi").css({height: $(window).height() - $("#header").height() - 1});
				$(window).resize(function(){
					$("#codi").css({height: $(window).height() - $("#header").height() - 1});
				});
			 });
		     </script>

That's just all!

Export as HTML
--------------

If you want to use "Export as HTML", you have to create a folder called "api" with chmod 777.

