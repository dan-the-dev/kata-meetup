<?php

namespace Kata;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Kata\Meetup;

class MettupTest extends TestCase
{
    private $meetup;

    protected function setUp(): void
    {
        $this->meetup = new Meetup();
    }

    public function testTheFirstMondayOfJanuary2017Returns20170102(): void
    {
        $dateDescription = new DateParser('The first Monday of January 2017');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2017/01/02'), $actual);
    }

    public function testTheFirstTuesdayOfFebruary2017Returns20170207(): void
    {
        $dateDescription = new DateParser('The first Tuesday of February 2017');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2017/02/07'), $actual);
    }

    public function testTheFirstWednesdayOfMarch2017Returns20170301(): void
    {
        $dateDescription = new DateParser('The first Wednesday of March 2017');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2017/03/01'), $actual);
    }

    public function testTheSecondMondayOfJanuary2018Returns20180108(): void
    {
        $dateDescription = new DateParser('The second Monday of January 2018');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2018/01/08'), $actual);
    }

    public function testTheSecondFridayOfApril2018Returns20180413(): void
    {
        $dateDescription = new DateParser('The second Friday of April 2018');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2018/04/13'), $actual);
    }

    public function testTheSecondThursdayOfSeptember2018Returns20180413(): void
    {
        $dateDescription = new DateParser('The second Thursday of September 2018');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2018/09/13'), $actual);
    }

    public function testTheThirdTuesdayOfAugust2018Returns20180821(): void
    {
        $dateDescription = new DateParser('The third Tuesday of August 2018');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2018/08/21'), $actual);
    }

    public function testTheFourthWednesdayOfJuly2018Returns20180725(): void
    {
        $dateDescription = new DateParser('The fourth Wednesday of July 2018');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2018/07/25'), $actual);
    }

    public function testTheFifthMondayOfDecember2018Returns20181225(): void
    {
        $dateDescription = new DateParser('The fifth Monday of December 2018');

        $actual = $this->meetup->calculateDate($dateDescription);

        $this->assertEquals(DateTimeImmutable::createFromFormat('Y/m/d', '2018/12/31'), $actual);
    }
}
