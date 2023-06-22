<?php
	namespace ReWrite3;
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	
	require_once './User.php';
    require_once './Employee.php';

    $emp = new Employee('john', 'smith', '1984-07-26', 3000);
    echo $emp->getAge();
    echo '<br />';
    echo $emp->getSurname();
    echo '<br />';
    echo $emp->getSalary();