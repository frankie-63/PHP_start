<?php
namespace ReWrite3;
require_once './User.php';
class Employee extends User
{
    private $salary;

    public function __construct($name, $surname, $birthday, $salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}