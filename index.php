<?php

	# This Is phpAlphaAdmin Index, There Is No Need To Edit This File.
	# Please Edit config.php To Change Settings.

	include('config.php');
	include('funcs.php');

	if($ipauth === true){
		if($cUser === $aAdminUser or $cPass === $aAdminPass or $aAdminIP === $_SERVER['REMOTE_ADDR']){
			header('Location: control.php');
		} else {
			
		}

		if($_POST['aLogin']){
			setcookie('aAdminUser', $pUser);
			setcookie('aAdminPass', $pPass);
			header('Location: control.php');
		}
	} else if($ipauth === false){
		if($cUser === $aAdminUser or $cPass === $aAdminPass){
			header('Location: control.php');
		} else {
			
		}

		if($_POST){
			setcookie('aAdminUser', $pUser);
			setcookie('aAdminPass', $pPass);
			header('Location: control.php');
		}
	}
?>
<html>
<head>
	<title>phpAlphaAdmin</title>
	<link href="theme/<?php echo $aTheme;?>/style.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<center>
		<br>
		<form method="post">
			Username: <input type="text" name="aAdminUser" class="alphainput"><br><br>
			Password: <input type="password" name="aAdminPass" class="alphainput"><br><br>
			<input type="submit" value="Login" class="alphabutton">
		</form>
	</center>
</body>
</html>