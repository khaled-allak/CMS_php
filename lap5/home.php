<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <button onclick="location.href='logout.php'" style="background-color: #555; color: white; padding: 10px 15px; border-radius: 5px; border: none; cursor: pointer;">Logout</button>
</body>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>