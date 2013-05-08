<!-- Base Header -->
<!DOCTYPE html>
<html>
<head>

<!-- Title -->
<title>Codi - A simple fullscreen code editor</title>

<!-- Base CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="lib/codemirror.css">

<!-- Base JS -->
<script src="lib/codemirror.js"></script>
<script src="mode/xml/xml.js"></script>

</head>

<body id="bod">

<header>
<span id="bodk"><span class="center">&lt; / &gt;</header>
</span>
<div id="codi">
<textarea id="code" name="code">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="editor" content="Codi" />

<title>Untitled Document</title>
</head>

<body>
</body>
</html>
</textarea>
</div>

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
        

</body>
</html>
