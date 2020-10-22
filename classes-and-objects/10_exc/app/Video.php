<?php

namespace App;

class Video
{
    private string $title;
    private array $rating;
    private bool $flag = false;

    public function __construct(string $title, float $startRating)
    {
        $this->title = $title;
        $this->setRating($startRating);
    }

    public function setRating(int $rating): void
    {
        $this->rating[] = $rating;
    }

    public function setFlag(bool $bool): void
    {
        $this->flag = $bool;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): float
    {
        return number_format(array_sum($this->rating) / count($this->rating), 2);
    }

    public function getFlag(): bool
    {
        return $this->flag;
    }

    public function videoChecked(): string
    {
        if ($this->getFlag()) {
            return 'Checked out';
        } else {
            return 'On the shelves';
        }
    }
}