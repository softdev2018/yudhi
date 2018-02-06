<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link href="style.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<br/>
		<br/>
		<center><h2>Silakan Login</h2></center>
		<div class="login">
			<form action="login.php" method="post" onSubmit="return validasi()">
				<div>
					<label>Username</label>
					<input type="text" name="username" id="username" />
				</div>
				<div>
					<label>Password</label>
					<input type="text" name="password" id="password" />
				</div>
				<div>
					<input type="submit" value="login" class="tombol "/>
				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript">
		function validasi(){
			var username = getElementByID("username").value;
			var password = getElementByID("password").value;
			if (username != "" && password != ""){
				return true;
			} else{
				alert('Username dan Password harus diisi');
				return false;
			}
		}
	</script>
</html>