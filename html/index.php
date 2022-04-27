<?
    header("Status: 200 OK We are online!");

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Practice</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
';

echo '
    <div class="wrapper">
    <h2>Welcome to my PHP Practice!</h2>
    <h3>Simple PHP scripts:</h3>
    <ul>
        <li><a href=/test.php><b>Player\'s card</b></a></li>
        <li><a href=/welcome.php><b>Welcome form</b></a></li>
    </ul>
';

echo '
    <h3>Scripts for database:</h3>
    <p>Doctrine2. MySQL connection needed.</p>
    
        <p>Browser view:</p>
        <ul>
            <li><a href=/scripts/show_all_products_browser.php><b>Show all products.php</b></a></li>
        </ul>
        <p>JSON format:</p>
        <ul>
            <li><a href=/scripts/all_products_JSON.php><b>All products JSON.php</b></a></li>
            <li><a href=/scripts/show_product_JSON.php?pid=1><b>Show product by id JSON.php</b></a></li>
        </ul>
    </div>
';

?>
</body>
<footer>
</footer>




