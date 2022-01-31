<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/jpg" href="<?php echo base_url() ?>css/images/PayPark Logo.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@900&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url() ?>css/settings.css">
	<title>Settings</title>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="prevButton px-5"><a href="<?php echo base_url() . "users/news" ?>"><i class="fa fa-arrow-left"></i>&nbsp &nbsp SETTINGS</a></div>

		<a href="<?php echo base_url() . "users/news" ?>" class="navbar-brand ms-auto"><img id="flogo" src="<?php echo base_url() ?>css/images/PayPark.png" alt="PayPark LOGO">
			<h2> PAYPARK</h2>
		</a>
	</nav>
	<?php
	$id = $_SESSION["user_id"];
	?>

	<main>
		<div class="navPannel pt-2">
			<a href="<?php echo base_url() . "users/settings" ?>">
				<i class="fa fa-cog"></i> &nbsp General</a>

			<a href="<?php echo base_url() . "users/privacy" ?>">
				<i class="fa fa-lock"></i> &nbsp Privacy</a>

			<a href="<?php echo base_url() . "users/notifications" ?>">
				<i class="fa fa-bell"></i> &nbsp Notifications</a>

			<hr>
			<a href="<?php echo base_url() . "users/deactivate" ?>">Deactivate</a>

			<a href="<?php echo base_url() . "users/logoutpage" ?>">Log Out</a>
		</div>

		<div class="content">
			<h2>Account Deactivation</h2>
			<form method="post">
				<div class="generalDeact">
					<div class="deactivateCont pt-4 px-2 mx-auto">
						<p>Deactivate your account?</p>
						<p class="notice">Are you sure that you want to deactivate your account? <br> This will be inaccessible for a while until you activate it.</p>
					</div>
					<?php echo '<input type="hidden" name="user_id" value=' . $id . '>'; ?>
					<div class="passwordDeact mx-auto col-sm-10">
						<p>Please input your password to confirm.</p>
						<input type="password" name="user_pwdrepeat" class="form-control" id="inputPassword">
					</div>
				</div>
				<div class="confirmation mx-auto">
					<a href=""></a><button type="submit" id="confirmCode1" class="btn btn-primary btn-sm mx-5 mt-4 ms-auto"> <strong>Confirm</strong> </button></a>
					<a href="<?php echo base_url() . "users/settings" ?>"><button type="button" id="confirmCode2" class="btn btn-primary btn-sm mt-4 ms-auto"> <strong>Cancel</strong> </button></a>
				</div>
			</form>
		</div>
	</main>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>