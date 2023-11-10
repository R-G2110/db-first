<?php

	require_once __DIR__ . '/db/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CDN Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/sstyle.css">
	<title>DB First</title>
</head>
<body>
	<div class="container my-5 ">
		<div class="card" style="width: 30rem;">
			<h2 class="mx-3">used_automobiles</h2>
			<ul class="list-group list-group-flush">
				<?php foreach($automobiles as $automobile): ?>
					<li class="list-group-item"><?php echo $automobile ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</body>
</html>