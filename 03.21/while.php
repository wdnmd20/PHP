<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8" />
		<title></title>
	</head>
	<body>
		<!--<script>
			for (let i = 0; i < 10; ++i) {
				console.log(i);
			}
			console.log('\n');
			for (let j = 0; j < 10; j++) {
				console.log(j);
			}
		</script>-->
		<?php
			$i = 0;
			$sum = 0;
			while($i <= 100) {
				$sum += $i;
				++$i;
			}
			echo '0到100总数是' . $sum;
		?>
	</body>
</html>