<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome form</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<form action="welcome.php" method="get">
    Name: <input type="text" name="name" value="Maksim Semeev"><br>
    E-mail: <input type="text" name="email" value="makssemeev@gmail.com"><br>
    <input type="submit">
</form>

<?
if (!empty($_GET) && !empty($_GET['name']) && !empty($_GET['email']) ) { 
?>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

<?
}
?>