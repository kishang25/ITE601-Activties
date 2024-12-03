<?php include "core/initialized.php"; ?>
<?php 



// print_r($_POST);
// die(1);

$user_id        = $_POST['user_id'];
$address        = $_POST['addresss'];
$contact_number = $_POST['contact_number'];


$user_info = new UserInfo();
$user_info->user_id = $user_id;
$user_info->address = $address;
$user_info->contact_numbers = $contact_number;

$user_info->create();


 	 header('Location: http://localhost/ITE601/?page=user-info');
  	 exit;


	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];

	// 	$user = new User();
	// 	$user->username = $username;
	// 	$user->password = $password;

	// 	$user->create();


	



		





 ?>