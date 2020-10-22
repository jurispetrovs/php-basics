<?php

class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(Point $p2): void
    {
        list($this->x, $p2->x) = array($p2->x, $this->x);
        list($this->y, $p2->y) = array($p2->y, $this->y);
    }

    public function getPoint(): string
    {
        return '(' . $this->x . ', ' . $this->y . ')' . PHP_EOL;
    }
}