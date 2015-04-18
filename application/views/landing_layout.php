<!DOCTYPE html>
<html>
<head>
	<title>The Drop</title>
	<link href="/thedrop/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/thedrop/assets/css/welcome.css" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="text-vertical-center">
			<h1>Welcome to Jamia <span>Connect</span></h1><br>
			<p>A place to get in touch, collaborate and share with JMI'tes</p><br>
			<form role="form" method="post" action="/thedrop/user/login">
				<input type="email" placeholder="Email" name="email" autofocus>
				<input type="password" placeholder="Password" name="password">
				<input type="submit" class="btn" name="submit" value="Login">
			</form>
			<?php
				if(isset($error)) {
					echo "<br><p><span>$error</span></p>";
				}
			?>
		</div>
	</header>
</body>
</html>
