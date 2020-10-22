<?php

class DateTest
{
    private Date $date;

    public function __construct()
    {
        $this->date = new Date('12', '06', '2020');
    }

    public function tests(): void
    {
        $this->date->getDate();

        echo 'Day: ' . $this->date->getDay() . PHP_EOL;
        echo 'Month: ' . $this->date->getMonth() . PHP_EOL;
        echo 'Year: ' . $this->date->getYear() . PHP_EOL;

        $this->date->setDay('16');
        $this->date->setMonth('07');
        $this->date->setYear('2021');

        $this->date->getDate();
    }
}