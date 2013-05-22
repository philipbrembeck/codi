<!DOCTYPE html>
<html>
<head>

<!-- Title -->
<title>Codi - A simple fullscreen code editor</title>

<!-- Your encoding goes here -->

<!-- Base CSS -->
<link rel="stylesheet" href="css/style.css" media="screen">
<link rel="stylesheet" href="lib/codemirror.css" media="screen">

</head>

<body id="bod">

<header>
<span id="bodk"><span class="center">&lt; / &gt;</header>
</span>
<div id="codi">
<textarea id="code" name="code">
<!DOCTYPE html>
<html>
<head>

<meta charset=UTF-8 />
<meta name="editor" content="Codi" />

<title>Untitled Document</title>
</head>

<body>
<h1>Example Text</h1>
</body>
</html>
</textarea>
</div>

<!-- Base JS -->
<script src="lib/codemirror.js"></script>
<script src="mode/xml/xml.js"></script>

<!-- Mode JS -->
<script type="text/javascript">
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
