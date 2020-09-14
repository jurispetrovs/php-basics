<?php

/*

Foo Corporation needs a program to calculate how much to pay their hourly employees. The US Department of Labor requires that employees get paid time and a half for any hours over 40 that they work in a single week. For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay. The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour. Foo Corp requires that an employee not work more than 60 hours in a week.

An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
For every hour over 40, they get overtime = (base pay) × 1.5.
The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
If the number of hours is greater than 60, print an error message.
Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error. Write a main method that calls this method for each of these employees:

Employee	Base Pay	Hours Worked
Employee 1	$7.50			35
Employee 2	$8.20			47
Employee 3	$10.00			73

*/

$employees = [
	[
		'name' => 'Employee 1',
		'base pay' => 7.50,
		'hours worked' => 35
	],
	[
		'name' => 'Employee 2',
		'base pay' => 8.20,
		'hours worked' => 47
	],
	[
		'name' => 'Employee 3',
		'base pay' => 10.00,
		'hours worked' => 73
	]
];

function totalPay(float $basePay, int $hoursWorked) {
	$paid = 0;
	if ($basePay < 8) {
		echo "Oh, base pay must not be less than the minimum wage ($8.00 an hour)" . PHP_EOL;
	} elseif ($hoursWorked >= 60) {
		echo "Oh, number of hours is greater than 60" . PHP_EOL;
	} else {
		if ($hoursWorked <= 40) {
			echo $paid = $basePay * $hoursWorked . PHP_EOL;
		} else {
			$overtime = $hoursWorked - 40;
			echo "$" . $paid = 40 * $basePay + $overtime * $basePay * 1.5 . PHP_EOL; 
		}
	}
}

function calculateForAllEmployees($employees) {
	foreach ($employees as $key => $employee) {
		echo "[{$employee['name']}] ";
		totalPay($employee['base pay'], $employee['hours worked']);
	}
}

calculateForAllEmployees($employees);