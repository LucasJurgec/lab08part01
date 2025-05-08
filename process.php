<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Metadata and page setup -->
	<meta charset="UTF-8">
	<meta name="description" content="Home page">
	<meta name="keywords" content="HTML5, tags">
	<meta name="author" content="Lucas Jurgec">
	<title>Home Page</title>

</head>
<body>
<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'password123'){
        $_SESSION['user'] = $username; header('Location:welcome.php');
    }
    else {
        echo "Invalid login. <a href='login.html'>Try again</a>";
    }
?>
</body>
</html>