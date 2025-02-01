

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<form method="post">
		Masukkan Nama :<input type="text" name="name">
		Negara :<input type="text">
		<button name="submit">Login</button>
	</form>

	<h1>Selamat datang <?php $_POST['name'] ?></h1>
</body>
</html>