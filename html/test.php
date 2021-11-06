<?

include_once 'vars.php';

$greetings = "My name is";

$realName = "";
if (!empty(Player::getRealname())) {
    $realName = Player::getRealname();
} else {
    $realName = "unknown";
}

?>
    <div style='width:400px;font-weight:700;text-align:end;'>

<?
echo $greetings . " " . $realName . "<br>" . "aka " . Player::$nickName;
echo "<br>";
echo "Sex: " . Player::SEX;
echo "<br>";

$newPlayerRiko = new Player(Ranking::setRandomRank());

echo "Age: " . getAgeByDate($newPlayerRiko->getBirthdate());;
echo "<br> Rank: ";
echo $newPlayerRiko->getRank() . "/" . Ranking::getMaxRank();
echo "<br>";


echo "</div>";