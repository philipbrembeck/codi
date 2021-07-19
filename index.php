<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Codi - A simple fullscreen code editor</title>
		<link rel="stylesheet" href="css/style.min.css"><!-- Base CSS (included) -->
		<link rel="stylesheet" href="lib/codemirror.css"><!-- Path to codemirror.css -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" /><!-- Bootstrap goes here (go to getbootstrap.com and download it from there!) -->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	</head>

	<body id="bod">

	<header>
		<?php 
			if(isset($_POST['send']) && $_POST['send'] == "1"){ 
				$code = $_REQUEST['code'];
				$rand = rand(1111,9999);
				$fp = fopen('api/'.$rand.'.html', 'w');
					fwrite( $fp,$code );
					fclose( $fp );
				echo "<script type='text/javascript'>$(window).load(function(){ $('#html').modal('show'); });</script>";
			}      
		?>
		<input type="submit" class="btn btn-info" value="Save as HTML" onclick="saveashtml(this);">
	</header>

	<form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post" name="saver" id="saver">
		<input type="hidden" name="send" value="1" />

		<div id="codi">
			<textarea id="code" name="code">
			<!-- Your code goes here -->
			</textarea>
		</div>
	</form>

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
					$("#codi").css({height: $(window).height() - $("header").height() - 20});
					$(window).resize(function(){
						$("#codi").css({height: $(window).height() - $("header").height() - 20});
					});
				});
				
				function saveashtml( obj ) {
	 			if( obj && obj.value.length > 0 )
			 	{
	 		 	document.getElementById("saver").submit();
			 	}
				}
	</script>


	<!-- HTML Export -->
	<div id="html" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="stop_4" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h2 id="stop_4"><em>&lt; / &gt;</em></h2>
	  </div>
	  <div class="modal-body">
	    Your file is available here: <a href="http://yourdomain.com/codi/download.php?f=api/<?php echo $rand; ?>.html&amp;download=y"><?php echo $rand ?>.html</a>
	  </div>
	  <div class="modal-footer"><a href="#" class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-file"></i> Edit</a></div>
	</div>

	<!-- Base JS -->
	<script src="lib/codemirror.js"></script><!-- Path tho codemirror.js -->
	<script src="jquery.min.js"></script><!-- Newest version of JQuery goes here -->
	<script src="js/bootstrap.js"></script><!-- Bootstrap JS goes here -->

	</body>
</html>
