<!DOCTYPE html>
<html lang="en">
<head>
    <title>Players Rate Test</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?

include_once 'vars.php';

$greetings = "My name is";

$realName = "";
$newPlayerRiko = new Player();

if (!empty(Player::getRealname())) {
    $realName = Player::getRealname();
} else {
    $realName = "unknown";
}

?>
    <div style='width:400px;font-weight:700;text-align:end;border: solid 1px;padding: 5px'>

<?
echo $greetings . " " . $realName . "<br>" . "aka " . $newPlayerRiko->getNickName();
echo "<br>";
echo "Sex: " . Player::SEX;
echo "<br>";

echo "Age: " . getAgeByDate($newPlayerRiko->getBirthdate());
echo "<br>";
echo "Team: " . Player::getTeamName();
echo "<br> Rank(randomly generated): ";
echo $newPlayerRiko->getRank() . "/" . Ranking::getMaxRank();
echo "<br>";

?>

</div>

