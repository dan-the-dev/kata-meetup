<?php

namespace Kata;

class DateParser
{
    const TEENTH_DAYS_KEYWORD = 'third';

    private $position;
    private $day;
    private $month;
    private $year;

    public function __construct(string $description)
    {
        $adapter = new DateKeywordToDayAdapter();
        $explodedDescription = explode(' ', $description);
        $keyword = $explodedDescription[1];

        if(preg_match('/teenth$/', $keyword)) {
            $this->setupTeenthDays($adapter, $keyword, $explodedDescription);
            return;
        }

        $this->setupDays($keyword, $explodedDescription);
    }

    public function position(): string
    {
        return $this->position;
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

    private function setupTeenthDays(DateKeywordToDayAdapter $adapter, string $keyword, array $explodedDescription): void
    {
        $this->setup(self::TEENTH_DAYS_KEYWORD, $adapter->transform($keyword), $explodedDescription[3], $explodedDescription[4]);
    }

    private function setupDays(string $keyword, array $explodedDescription): void
    {
        $this->setup($keyword, $explodedDescription[2], $explodedDescription[4], $explodedDescription[5]);
    }

    private function setup(string $position, string $day, string $month, string $year): void
    {
        $this->position = $position;
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
}

