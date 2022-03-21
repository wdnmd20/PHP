<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
	$score = 60;
	switch (intval($score/10)) {
		case 9:
		echo '优秀';
		break;
		case 8:
		echo '良好';
		break;
		case 7:
		echo '中等';
		break;
		case 6:
		echo '及格';
		break;
		default:
		echo '不及格';
	}	
		
	?>
		
	</body>
</html>