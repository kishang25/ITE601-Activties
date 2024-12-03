<?php include "core/initialized.php"; ?>
<?php 	

		$id 	= 	$_GET['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];




		$user = new User();
		$user->id = $id;
		$user->username = $username;
		$user->password = $password;

		$user->update();


	 	 header('Location: http://localhost/ITE601');
  	 exit;




		





 ?>