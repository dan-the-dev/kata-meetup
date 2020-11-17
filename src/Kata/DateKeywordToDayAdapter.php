<?php

namespace Kata;

class DateKeywordToDayAdapter
{
    private $keywordToDay = [
        'monteenth' => 'Monday',
        'tuesteenth' => 'Tuesday',
        'wednesteenth' => 'Wednesday',
        'thursteenth' => 'Thursday',
        'friteenth' => 'Friday',
        'saturteenth' => 'Saturday',
        'sunteenth' => 'Sunday',
    ];

    public function transform(string $keyword): string
    {
        return $this->keywordToDay[$keyword];
    }
}