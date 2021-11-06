<?


class Player
{
    protected int $rank;
    protected $birthdate = '27/10/1997';
    const SEX = "male";
    static $nickName = "SaintRiko";
    protected const REAL_NAME = "Maksim Semeev";

    public function __construct(int $rank)
    {
        $this->rank = $rank;
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