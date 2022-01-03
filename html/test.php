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
    <div style='width:400px;font-weight:700;text-align:end;'>

<?
echo $greetings . " " . $realName . "<br>" . "aka " . $newPlayerRiko->getNickName();
echo "<br>";
echo "Sex: " . Player::SEX;
echo "<br>";

echo "Age: " . getAgeByDate($newPlayerRiko->getBirthdate());
echo "Team: " . Player::getTeamName();
echo "<br> Rank: ";
echo $newPlayerRiko->getRank() . "/" . Ranking::getMaxRank();
echo "<br>";



echo "</div>";