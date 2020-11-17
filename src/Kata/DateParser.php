<?php

namespace Kata;

class DateParser
{
    private $keyword;
    private $day;
    private $month;
    private $year;

    public function __construct(string $description)
    {
        $explodedDescription = explode(' ', $description);
        $this->keyword = $explodedDescription[1];
        $this->day = $explodedDescription[2];
        $this->month = $explodedDescription[4];
        $this->year = $explodedDescription[5];
    }

    public function keyword(): string
    {
        return $this->keyword;
    }

    public function day(): string
    {
        return $this->day;
    }

    public function month(): string
    {
        return $this->month;
    }

    public function year(): string
    {
        return $this->year;
    }
}