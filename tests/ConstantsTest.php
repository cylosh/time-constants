<?php
/**
 * Tests the definition of time constants.
 *
 * @package SteveGrunwell\TimeConstants
 */

use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    /**
     * Ensure that each constant is defined and numeric.
     *
     * @dataProvider constantsProvider()
     */
    public function testConstantsAreDefined($constant)
    {
        $this->assertTrue(defined($constant), 'Expected the constant to be defined.');
        $this->assertIsInt(constant($constant), 'Expected an integer value.');
    }

    /**
     * Provides a list of all constants defined by this package.
     */
    public function constantsProvider()
    {
        return [
            'One second (in seconds)'       => ['ONE_SECOND'],
            'One minute (in seconds)'       => ['MINUTE_IN_SECONDS'],
            'One hour (in seconds)'         => ['HOUR_IN_SECONDS'],
            'One day (in seconds)'          => ['DAY_IN_SECONDS'],
            'One week (in seconds'          => ['WEEK_IN_SECONDS'],
            'One 30-day month (in seconds)' => ['MONTH_IN_SECONDS'],
            'One 31-day month (in seconds)' => ['JANUARY_IN_SECONDS'],
            'One 29-day month (in seconds)' => ['FEBRUARY_LEAP_IN_SECONDS'],
            'One 28-day month (in seconds)' => ['FEBRUARY_IN_SECONDS'],
            'One 31-day month (in seconds)' => ['MARCH_IN_SECONDS'],
            'One 30-day month (in seconds)' => ['APRIL_IN_SECONDS'],
            'One 31-day month (in seconds)' => ['MAY_IN_SECONDS'],
            'One 30-day month (in seconds)' => ['JUNE_IN_SECONDS'],
            'One 31-day month (in seconds)' => ['JULY_IN_SECONDS'],
            'One 31-day month (in seconds)' => ['AUGUST_IN_SECONDS'],
            'One 30-day month (in seconds)' => ['SEPTEMBER_IN_SECONDS'],
            'One 31-day month (in seconds)' => ['OCTOBER_IN_SECONDS'],
            'One 30-day month (in seconds)' => ['NOVEMBER_IN_SECONDS'],
            'One 31-day month (in seconds)' => ['DECEMBER_IN_SECONDS'],
            'One year (in seconds)'         => ['YEAR_IN_SECONDS'],
            'One minute (in minutes)'       => ['ONE_MINUTE'],
            'One hour (in minutes)'         => ['HOUR_IN_MINUTES'],
            'One day (in minutes)'          => ['DAY_IN_MINUTES'],
            'One week (in minutes'          => ['WEEK_IN_MINUTES'],
            'One 30-day month (in minutes)' => ['MONTH_IN_MINUTES'],
            'One year (in minutes)'         => ['YEAR_IN_MINUTES'],
        ];
    }
}
