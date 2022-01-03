<?


class Player
{
    protected int $rank;
    protected $birthdate = '27/10/1997';
    protected string $nickName;
    protected const REAL_NAME = "Maksim Semeev";
    protected const TEAM_NAME = "Wolves";
    const SEX = "male";

    public function __construct()
    {
        $this->rank = Ranking::setRandomRank();
        $this->nickName = "SaintRiko";
    }

    function getNickName()
    {
        return $this->nickName;
    }

    function getRank()
    {
        return $this->rank;
    }

    function getBirthdate()
    {
        return $this->birthdate;
    }

    public static function getRealname()
    {
        return static::REAL_NAME;
    }

    public static function getTeamName()
    {
        return static::TEAM_NAME;
    }

}

class Ranking
{
    protected const MAX_RANK = "100";

    public static function getMaxRank()
    {
        return static::MAX_RANK;
    }

    public static function setRandomRank()
    {
        return random_int(0, static::MAX_RANK);
    }
}

function getAgeByDate($birthdate)
{
    $tz = new DateTimeZone('Europe/Moscow');

    $age = DateTime::createFromFormat('d/m/Y', $birthdate, $tz)
        ->diff(new DateTime('now', $tz))
        ->y;

    return $age;
}

?>