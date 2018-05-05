<?php include 'header.php' ?>

<?php
	if (isset($_POST['name']) && isset($_POST['email'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$string = "$name, $email \n";
		$today = date('d-m-y');
		$file_name = "data/{$today}.txt";
		$file = fopen($file_name, 'a');
		fwrite($file, $string);
		fclose($file);
	}




?>




		<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" />
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-outline-info">Add Person</button>
					</div>

				</form>
	<?php include 'footer.php' ?>