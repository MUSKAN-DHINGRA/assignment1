<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD in OOP PHP | Read</title>
	<meta name="description" content="collecting employees data">
	<meta name="robots" content="noindex, nofollow">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="./css/style.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
	<header>
	<?php
                include("include/globalheader.php");
           ?>
  </header>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>#</th>
				<th>Full Name</th>
				<th>Age</th>
				<th>Email</th>
                <th>Hours Worked</th>
                <th>department</th>
			</tr>
			<?php

				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						
						<td><?php echo $r['fname'] . " " . $r['lname']; ?></td>
						<td><?php echo $r['age'] ?></td>
						<td><?php echo $r['email'] ?></td>
                        <td><?php echo $r['hoursworked'] ?></td>
                        <td><?php echo $r['department'] ?></td>
					</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>
</body>
</html>
