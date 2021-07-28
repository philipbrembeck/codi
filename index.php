<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Codi - A simple fullscreen code editor</title>
		<link rel="stylesheet" href="assets/css/style.min.css">
		<meta name="viewport" content="initial-scale=1.0">
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
	<script src="assets/js/codemirror.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

	</body>
</html>
