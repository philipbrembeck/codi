![Codi Logo](https://jokenetwork.de/git/img/CodiWrapper.svg)

# Codi Codemirror Wrapper for Fullscreen Editing 
![Top Languages](https://img.shields.io/github/languages/top/philipbrembeck/codi?style=flat-square)
![CSS Version](https://img.shields.io/badge/CSS-v3-blue?style=flat-square)
![HTML Version](https://img.shields.io/badge/HTML-v5-red?style=flat-square)
![License](https://img.shields.io/github/license/philipbrembeck/codi?style=flat-square)

Codi is a light-weight CodeMirror-Wrapper.
You can use it as an HTML-, PHP-, CSS- JavaScript- or Mark-up/down- Editor. 

### Appearance
![Codi Screenshot](https://jokenetwork.de/git/img/codiscreenshot.png)
Codi can appear in different themes, see [CodeMirror Styling Example](https://codemirror.net/6/examples/styling/) for more information.

### Behind Codi
I needed a markdown/html/css editor for the web, as quick as possible.

So I found CodeMirror, which is super nice, but without a wrapper, it's not usable as a "real" online-based editor, because it would only fill one half of a page.
Codi is extremly simple, 100 lines of Code, light-weight and understandable for everyone who knows a little bit of JS!

Codi is a simple beginner editor for everyone who wants to learn HTML and the other languages.

#### Demo
If you want to see Codi in action, visit [Codi](https://jokenetwork.de/codi/).

### Usage

Clone this repository with:

    gh repo clone philipbrembeck/codi

or via HTTPS:

    https://github.com/philipbrembeck/codi.git
    
index.php

This is the head-section of Codi - Here, we include the CSS-Stylesheets. If you want to use a personalized Stylesheet, palce it here.

    <!-- Base CSS --> 
    <link rel="stylesheet" href="...."> <!-- Your own stylesheet here -->
    <link rel="stylesheet" href="lib/codemirror.css"> <!-- CodeMirror: DON'T DELETE THIS -->
    
This is the JavaScript-section -  It's located on the end of the index's body, to improve the speed of your site, the CodeMirror libarys are included here.

    <!-- Base JS (On the bottom of body) -->
    <script src="lib/codemirror.js"></script>
    <script src="mode/xml/xml.js"></script>

You have to download the latest Version of Codemirror from their [GitHub repository](https://github.com/codemirror/codemirror.next/).
Unzip and upload it to the same directory as your index.php.

Because CodeMirror doesn't allow 100% width and 100% height as CSS-styling, we need a little bit of JavaScript:

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


### Export as HTML
If you want to use Codi on the go or implement it in your site, you probably also want to use the "Export as HTML" function.
If you want to use "Export as HTML", you have to create a folder called "api" with chmod 777. Then you're good to go"

