<?
    header("Status: 200 OK We are online!");

echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>PHP Practice</title>
    <link rel=\"stylesheet\" href=\"css/main.css\">
</head>
<body>
";

echo "
    <h2>Welcome to my PHP Practice!</h2>
    <h3>Simple PHP scripts:</h3>
    <ul>
        <li><a href=/test.php><b>PLAYER CARD</b></a></li>
        <li><a href=/welcome.php><b>WELCOME FORM</b></a></li>
    </ul>
";

echo "
    <h3>Products database:</h3>
    <p>Doctrine2. MySQL connection needed.</p>
    <ul>
        <li><a href=/scripts/show_all_products_browser.php><b>show_all_products.php</b></a></li>
        <li><a href=/scripts/all_products_JSON.php><b>all_products_JSON.php</b></a></li>
        <li><a href=/scripts/show_product_JSON.php?pid=1><b>show_product_JSON.php</b></a></li>
    </ul>
";

?>
</body>
<footer>
</footer>




