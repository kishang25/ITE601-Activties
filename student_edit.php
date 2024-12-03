
<?php include "core/initialized.php"; ?>
<?php
	$id =  $_GET['id'];

	$user = User::find_by_id($id);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Add </title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-4">
				<h2>Update User Credentials</h2>
				<form method="POST" action="student_update.php?id=<?php echo $user->id; ?>">
					
					<div class="mb-3">
						<label class="form-label">Username:</label>
						<input type="text" value="<?php echo $user->username; ?>" name="username" class="form-control">
					</div>

					<div class="mb-3">
						<label class="form-label">Password:</label>
						<input type="text" value="<?php echo $user->password; ?>" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-info"> 

	<i class="fa-solid fa-pen"></i> &nbsp; Update</button>
				</form>



			</div>
		</div>
	</div>

</body>
</html>
