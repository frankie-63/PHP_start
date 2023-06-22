<?php
namespace ReWrite3;
class User
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($this->birthday);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getAge()
    {
        return $this->age;
    }

    private function calculateAge($birthday)
    {
        function isDayPassed($date){
            list($year, $month, $day) = explode("-", $date);
            if ($month < date('m')) {
                return true;
            } else if ($month === date('m') and $day < date('d')) {
                return true;
            } else {
                return false;
            }
        }
        list($byear, $bmonth, $day) = explode("-", $birthday);
        $agePre = date('Y') - $byear;
        if (isDayPassed($birthday)) {
            $age = $agePre;
        } else {
            $age = $agePre - 1;
            
        }
        return $age;
    }
}