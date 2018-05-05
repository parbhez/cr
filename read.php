<?php

		$today = date('d-m-y');
		$file_name = "data/{$today}.txt";
		$file = fopen($file_name, 'r');
		//echo nl2br( fread($file, filesize($file_name)));
		//echo fgets($file);
		// echo fgets($file);
		// echo fgets($file);


		// while ($string = fgets($file)) {
		// 	//echo "$string";
		// 	$stringexploded = explode(",", $string);
		// 	//print_r($stringexploded);
			
		// 	$name = $stringexploded[0];
		// 	$email = $stringexploded[1];
		// 	echo "$id";
		// 	echo "$name";
		// 	echo "$email";
		// // 	list($name, $email) = $stringexploded;
		// // 	echo "$name".'<br/>';
		// // 	echo "$email".'<br/>';

?>

<?php include 'header.php'; ?>
	<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Email</th>
			</tr>
			<?php while($string = fgets($file)): ?>
				<?php 
					$stringexploded = explode(',', $string);
					list($name, $email) = $stringexploded;
				?>
				<tr>
					<td><?php echo $name;?></td>
					<td><?php echo $email;?></td>
				</tr>

			<?php endwhile;?>
		</table>
<?php include 'footer.php'; ?>

