<?php

class Dog
{
    private string $name;
    private string $sex;
    private string $mothersName;
    private string $fathersName;

    public function __construct(
        string $name,
        string $sex,
        string $mothersName = 'Unknown',
        string $fathersName = 'Unknown'
    )
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mothersName = $mothersName;
        $this->fathersName = $fathersName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFathersName(): string
    {
        return $this->fathersName;
    }

    public function hasSameMotherAs(Dog $otherDog): bool
    {
        if ($this->mothersName === $otherDog->mothersName) {
            return true;
        }
        return false;
    }
}