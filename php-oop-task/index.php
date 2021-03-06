<?php

spl_autoload_register(function($classname) {
    $classname = str_replace('\\', '/', $classname);
    require_once(__DIR__ . "/$classname.php");
});

use Itransition\Entities\Team;
use Itransition\Entities\Employees\SeniorDeveloper;
use Itransition\Entities\Employees\MiddleDeveloper;
use Itransition\Entities\Employees\Designer;
use Itransition\Entities\Employees\HtmlCoder;
use Itransition\Entities\Payments\FixedPayment;
use Itransition\Entities\Payments\HourlyPayment;

$team = new Team('X');
$team->addEmployee(new Designer('John Doe', new FixedPayment(3000)));
$team->addEmployee(new SeniorDeveloper('Demitrious Johnson', new HourlyPayment(10, 60)));
$team->addEmployee(new MiddleDeveloper('Jack Ripper', new FixedPayment(1000)));
$team->addEmployee(new MiddleDeveloper('Jon Jones', new FixedPayment(1000)));
$team->addEmployee(new HtmlCoder('Cain Velasquez', new HourlyPayment(5, 120)));
echo $team->getSalary();
