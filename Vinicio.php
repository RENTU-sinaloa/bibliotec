<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/vistas.js"></script>
	<link rel="stylesheet" href="css/hoja_inicio.css">
	<title></title>
</head>
	
	<script type="text/javascript">
		$(function(){

			$("#slider div:gt(0)").hide();

			setInterval(function(){
				$("#slider div:first-child").fadeOut(1000)
				.next("div").fadeIn(1000)
				.end().appendTo("#slider");
			},3000);

		})

	</script>
<body>


	<div id="ContInicio">
    <div id="banner">
				<div><img src="img/banner.jpg" width="900" height="280"></div>	
			</div>
	</div>



</body>
</html>