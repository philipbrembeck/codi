Codi
==============
[![Build Status](https://secure.travis-ci.org/jokenetwork/codi.png?branch=master)](http://travis-ci.org/jokenetwork/codi)


Everything you need
--------------

In the head-tag you'll find the following Stylesheet and Javascripts:

    <!-- Base CSS -->
    <link rel="stylesheet" href="....">
    <link rel="stylesheet" href="lib/codemirror.css">

    <!-- Base JS -->
    <script src="lib/codemirror.js"></script>
    <script src="mode/xml/xml.js"></script>

You have to download the latest Version of Codemirror from here: https://github.com/jokenetwork/CodeMirror/
Unzip and upload it to the same directory as your index.php lays.

What's that JS on the bottom?
--------------
Okay, thats important. This little script makes the editor fullscreen. Codemirror doesn't allow width: 100%,
so you have to use Javascript.

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


