<?php
session_start();
$err = '';

if(!empty($_POST["email"]) && !empty($_POST["password"])){
	
	require_once("login.class.php");
	$obj = new Login();	
	$res = $obj->checkLogin($_POST["email"],$_POST["password"]);

	if($res==1){
		$_SESSION["user"] = $_POST["email"];
		header('Location: home.php');
	}else{
		$err = "Invalid Credentials";
	}
}

require_once("header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css@1.10.2/mvp.css">
</head>
<body>
	<h2>Login Page</h2>
	<form action="login.php" method="post">
		<input class="form-control" type="text" name="email" placeholder="Enter Email id" /><br />
		<input type="password" class="form-control" name="password" placeholder="Enter Password here" /><br />
	    <input type="submit" value="Login" class="btn btn-outline-success" />
		</form>
			<?php
			if(!empty($err)){
				echo '<div class="alert alert-danger">'.$err.'</div>';
			}
			?>		
</body>
</html>

