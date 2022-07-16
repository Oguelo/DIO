<html>
	
	
	<head>
		<title> Site Teste PhP!</title>
		<script src = "https: //code.jquery.com/jquery-3.5.1.min.js"></script>
	<head>
	
		<style type = "text/css">
			.linha{
				font-weight: bold;
				color: blue;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
	</head>
	<body>
		<?php
			for( $i = 0; $i < 10; $i++){
				print( "<span class = \"linha\">linha numero" . $i . "</span><br/>");
			}
		?>
	</body>
	<script type="text/javascript">
		$(document).ready(fuction(){
			alert("Abritesesamo");
		});
	</script>
</html>
	