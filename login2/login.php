<?php
session_start();
require_once('../config.php');

$login=$password=$login_err=$login_pass_err=$password_err="";

if(isset($_POST['login']))
{
	if(empty(trim($_POST["username"])))
		{
			$login_err = "Enter your Username";
		}
		elseif(empty(trim($_POST["pwd"])))
		{
			$password_err = "Enter the password";
		}
		else
		{
			// edw mporeis na fas sql injection, opote vazw mysql_real_escape_string stis metavlites $login kai $password
			$login = mysqli_real_escape_string($link, trim($_POST["username"]));
			$password = mysqli_real_escape_string($link, trim($_POST["pwd"]));

			// Kalutera na min exeis ton kwdiko fanero sthn vash dedomenwn giati an tuxon sou klepsoun thn vash, tote kseroun ton kwdiko sou
			// Antithetws, mporeis na ton exeis kryptografhmeno me sugkekrimeno kleidi (HASH) gia kathe xrhsth

			// Tsekaroume an o xrhsths uparxei sthn database

			$checkUserExists = mysqli_query($link, sprintf('SELECT * FROM users WHERE USERNAME = "%s"', $login));
			if (mysqli_num_rows($checkUserExists))
			{
				// o xrhsths uparxei, tsekare gia to password

				while ($obj=mysqli_fetch_object($checkUserExists))
				{
					// an o kwdikos tairiazei me ton kryptografhmeno kwdiko sthn database
					if($obj->PASSWORD == md5(md5($password).$obj->HASH))
					{
						$_SESSION['loggedin'] = true;

						// kalutera na mhn kratas polla dedomena sto session giati mporei aneta na sto klepsoun an den exis site me HTTPS.
						// ena ID mono ftanei (giati etsi ki alliws) mporeis na pareis ta stoixeia apo ton xrhsth xrhsimopoiontas mono to ID
						// alla twra sou vazw kai to username giati mporei na to xrhsimopoieis se kamia selida kai na mh to exw dei
						$_SESSION['userid'] = $obj->ID;
						$_SESSION['username'] = $obj->USERNAME;

						header("Location: ../index.php");
					}
				}

  				mysqli_free_result($checkUserExists);
			}
			else
			{

				// o xrhsths den uparxei
				$login_pass_err = 'This user does not exist.';
			}

		}
}







?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background: url('back.jpg');background-repeat: no-repeat;background-size:cover;">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-color: orange;">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="login.php">
					<div class="wrap-input100 validate-input m-b-26 <?php echo (!empty($login_err)) ? 'has-error' : ''; ?>" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
						<span style="color:red;font-size:12px;position:absolute;margin-top:-35px;"><?php echo $login_err; ?></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pwd" placeholder="Enter password">
						<span class="focus-input100"></span>
						<span style="color:red;font-size:12px;position:absolute;margin-top:-35px;"><?php echo $password_err; ?></span>
					</div>

					<div class="container-login100-form-btn <?php echo (!empty($login_pass_err)) ? 'has-error' : ''; ?>">
						<button type="submit" name="login" class="login100-form-btn">
							Login
						</button>
						<span style="color:red;font-size:12px;position:absolute;margin-top:-35px;"><?php echo $login_pass_err; ?></span>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
