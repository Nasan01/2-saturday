<?php 

$file = file_get_contents("communes.json");
$file_de = json_decode($file);
$compt = 0;
$arr = array();
$arr2 = array();

/*if (isset($_POST['find'])) {
	$search = $_POST['search'];

	foreach ($file_de as $value) {
		foreach ($value->fokontany as $value2) {
			/*for ($i=0; $i < count($value2->name); $i++) { 
				if($search == $value2->name){
					$compt++;
				}
			}

			$arr[] = $compt++;
			$arr2[] = $value2->name;
		}
	}

}

echo "<pre>";

echo print_r($arr2);

echo "</pre>";
*/

foreach ($file_de as $value) {
	foreach ($value->fokontany as $fokontany) {
		$arr[] = $fokontany->name;
	}
}
for ($i=0; $i < count($arr); $i++) { 
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
//		print_r($file_de);
//		var_dump($file_de);

	?>
	<!--p
	<table border="1">
		<tr>
			<td>id :</td>
			<td>name: </td>
			<td>fokotany: </td>
		</tr>
		
		<?php foreach ($file_de as $value) : ?>
		<tr>
			<td><?= $value->_id; ?></td>
			<td><?= $value->name; ?></td>
			<td><?php foreach ($value->fokontany as $value2) :?>
					<?= 'id: '. $value2->_id; ?><br>
					<?= 'name: '.$value2->name; ?><br>
				<?php endforeach; ?>
			</td>
		</tr>
		<?php endforeach; ?>
		
		<form method="post" action="">
			
			<input type="text" name="search">
			<input type="submit" name="find" value="find">
		</form>
		-->
		
	</table>
</body>
</html>