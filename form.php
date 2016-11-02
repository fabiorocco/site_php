<?php 

extract($_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email</title>
</head>
<body>
	<section>
		<div>
			E mail : <?= $email ?>
		</div>
		<div>
			Objet : <?= $objet ?>
		</div>
		<div>
			Corps : <?= $name ?>
		</div>
	</section>
</body>
</html>