<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>九九乘法表</title>
		<style>
			td {
				width: 80px;
				height: 30px;
				border: 1px solid black;
			}
			.noBorder {
				border: 0;
			}
		</style>
	</head>
	<body>
		<?php
		echo '<table>';
			for ($i = 1; $i <= 9; ++$i) {
				echo '<tr>';
					for ($td = 0; $td < 9 - $i; ++$td) {
						echo '<td></td>';
					}
				for ($j = 1; $j <= $i; ++$j) {
					
					echo '<td>' . $j . 'x' . $i . '=' . $i * $j . '</td>';
				}
				echo '</tr>';
			}
		echo '</table>';
		?>
		
		<script>
			const tds = document.getElementsByTagName('td');
			for (let i in tds) {
				if (tds[i].innerHTML === '') {
					tds[i].className = 'noBorder';
				}
			}
		</script>
	</body>
</html>
