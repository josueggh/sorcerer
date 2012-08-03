<!DOCTYPE HTML>
<html>
<head>
	<?php	
		$theme = 'ninja';
		$themes = array('ninja','mix');
		if(isset($_GET['theme'])){
			if(in_array($_GET['theme'],$themes)){
				$theme = $_GET['theme'];
			}
		}
	?>
	<meta charset="utf-8">
	<title>CSS - Cascading Style Sword</title>
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href="./css/touchscroll.css" rel="stylesheet">
	<link href="./css/core.css" rel="stylesheet">
	<link href="./themes/<?php print $theme?>.css" rel="stylesheet">
	<script src="./js/css-beziers.js"></script>
	<script src="./js/touchscroll.js"></script>
</head>
<body>

<img src="./back/<?php print $theme?>.jpg" id="back-image" style="position:absolute;z-index:0;width:768px;" id="background">

<div id="container">
	<div id="pager" >
		<div class="scroller" id="page" >
			<?php include("content/{$theme}.php")?>
		</div>
	</div>
</div>

<script type="text/javascript">
(function(){
	scroller = document.querySelector("#page");
	new TouchScroll(scroller, {elastic: false});

}())
</script>

</body>
</html>
