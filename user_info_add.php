<?php include "core/initialized.php"; ?>




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
				<h2>Create New User Information</h2>
						<form method="POST" action="user_info_create.php">
					
					<div class="mb-3">
						<label class="form-label">Select User:</label>
						<select name="user_id" id="" class="form-control">
                            <?php foreach (User::find_all() as $user ) : ?>
                            <option value="<?php echo $user->id; ?>"><?php echo $user->username; ?></option>
                            <?php endforeach; ?>
                        </select>
					</div>

					<div class="mb-3">
						<label class="form-label">Address:</label>
						<input type="text" name="addresss" class="form-control">
					</div>
                    <div class="mb-3">
						<label class="form-label">
                            Contact Number:</label>
						<input type="text" name="contact_number" class="form-control">
					</div>
                    <div class="mb-3">
						<label class="form-label">Birthdate:</label>
						<input type="text" name="birthdate" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save</button>
				</form>



			</div>
		</div>
	</div>

</body>
</html>