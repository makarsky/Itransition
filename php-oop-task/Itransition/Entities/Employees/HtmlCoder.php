<?php

namespace Itransition\Entities\Employees;

use Itransition\Interfaces\Payable as Payable;

class HtmlCoder extends Employee
{
	function __construct($fullName, Payable $salary)
	{
		parent::__construct($fullName, $salary);
	}
}