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
    if (isset($_SESSION['user'])){
        echo "Welcome, " .$_SESSION['user'];
    } else {
        header('Location:login.html')
    }
?>
</body>
</html>