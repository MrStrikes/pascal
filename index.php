<!DOCTYPE html>
<html>
	<head>
		<title>Triangle de Pascal</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="index.php" method="POST">
			<label for="depth">Profondeur : </label>
			<input type="number" id="depth" name="depth" min="1" max="100" value="<?php echo $_POST['depth']; ?>">
			<input type="submit">
		</form>
		<style>
			table{ 
			    border-collapse: collapse;
			}
			td{ 
			    text-align: center; 
			    padding: 0px 5px; border: 1px solid black; 
			    box-sizing: border-box; 
			}
		</style>
			<table>
				<?php
				if ($_POST['depth'] > 30){
					$_POST['depth'] = 30;
				}
				$depth = $_POST['depth'];
				$array[0][0] = 1;
				if ($depth){
					echo "<h1>Triangle de profondeur ".$depth."</h1>";
				}
				for ($i = 1; $i <= $depth; $i++){
					$array[$i][0] = 1;
					echo "<tr>
					";
						for($j = 1; $j <= $i; $j++){
							if($j == 1 || $j == $i){
					            $array[$i][$j] = 1;
							} else {
							$array[$i][$j] = $array[$i-1][$j-1] + $array[$i-1][$j];
						}
						echo "<td colspan=".floor($depth * $depth / ($i)).'>'.$array[$i][$j]."</td>
						";
					}
					echo "</tr>
					";
				}
				?>
		</table>
	</body>
</html>