<?php
/**
 * Defines useful time-based constants.
 *
 * @package SteveGrunwell\TimeConstants
 */

/**
 * Time based in seconds.
 *
 * This is commonly used for things like cache expirations or task scheduling, and are heavily
 * inspired by WordPress' time constants.
 *
 * @link https://codex.wordpress.org/Easier_Expression_of_Time_Constants
 */

/* One second. */
if (! defined('ONE_SECOND')) {
    define('ONE_SECOND', 1);
}

/* One minute = 60 seconds. */
if (! defined('MINUTE_IN_SECONDS')) {
    define('MINUTE_IN_SECONDS', 60);
}

/* One hour = 60 minutes. */
if (! defined('HOUR_IN_SECONDS')) {
    define('HOUR_IN_SECONDS', 60 * MINUTE_IN_SECONDS);
}

/* One day = 24 hours. */
if (! defined('DAY_IN_SECONDS')) {
    define('DAY_IN_SECONDS', 24 * HOUR_IN_SECONDS);
}

/* One week = 7 days. */
if (! defined('WEEK_IN_SECONDS')) {
    define('WEEK_IN_SECONDS', 7 * DAY_IN_SECONDS);
}

/* For common usage, assume one month = 30 days. */
if (! defined('MONTH_IN_SECONDS')) {
    define('MONTH_IN_SECONDS', 30 * DAY_IN_SECONDS);
}

if (! defined('JANUARY_IN_SECONDS')) {
    define('JANUARY_IN_SECONDS', 31 * DAY_IN_SECONDS);
}
if (! defined('FEBRUARY_LEAP_IN_SECONDS')) {
    define('FEBRUARY_LEAP_IN_SECONDS', 29 * DAY_IN_SECONDS);
}
if (! defined('FEBRUARY_IN_SECONDS')) {
    define('FEBRUARY_IN_SECONDS', 28 * DAY_IN_SECONDS);
}
if (! defined('MARCH_IN_SECONDS')) {
    define('MARCH_IN_SECONDS', 31 * DAY_IN_SECONDS);
}
if (! defined('APRIL_IN_SECONDS')) {
    define('APRIL_IN_SECONDS', 30 * DAY_IN_SECONDS);
}
if (! defined('MAY_IN_SECONDS')) {
    define('MAY_IN_SECONDS', 31 * DAY_IN_SECONDS);
}
if (! defined('JUNE_IN_SECONDS')) {
    define('JUNE_IN_SECONDS', 30 * DAY_IN_SECONDS);
}
if (! defined('JULY_IN_SECONDS')) {
    define('JULY_IN_SECONDS', 31 * DAY_IN_SECONDS);
}
if (! defined('AUGUST_IN_SECONDS')) {
    define('AUGUST_IN_SECONDS', 31 * DAY_IN_SECONDS);
}
if (! defined('SEPTEMBER_IN_SECONDS')) {
    define('SEPTEMBER_IN_SECONDS', 30 * DAY_IN_SECONDS);
}
if (! defined('OCTOBER_IN_SECONDS')) {
    define('OCTOBER_IN_SECONDS', 31 * DAY_IN_SECONDS);
}
if (! defined('NOVEMBER_IN_SECONDS')) {
    define('NOVEMBER_IN_SECONDS', 30 * DAY_IN_SECONDS);
}
if (! defined('DECEMBER_IN_SECONDS')) {
    define('DECEMBER_IN_SECONDS', 31 * DAY_IN_SECONDS);
}

/* For common usage, assume one year = 365 days. */
if (! defined('YEAR_IN_SECONDS')) {
    define('YEAR_IN_SECONDS', 365 * DAY_IN_SECONDS);
}

/**
 * Time based in minutes.
 *
 * For platforms that measure time based in minutes (such as Laravel's Cache facade), these
 * constants provide similar functionality.
 */

/* One second. */
if (! defined('ONE_MINUTE')) {
    define('ONE_MINUTE', 1);
}

/* One hour = 60 minutes. */
if (! defined('HOUR_IN_MINUTES')) {
    define('HOUR_IN_MINUTES', 60);
}

/* One day = 24 hours. */
if (! defined('DAY_IN_MINUTES')) {
    define('DAY_IN_MINUTES', 24 * HOUR_IN_MINUTES);
}

/* One week = 7 days. */
if (! defined('WEEK_IN_MINUTES')) {
    define('WEEK_IN_MINUTES', 7 * DAY_IN_MINUTES);
}

/* For common usage, assume one month = 30 days. */
if (! defined('MONTH_IN_MINUTES')) {
    define('MONTH_IN_MINUTES', 30 * DAY_IN_MINUTES);
}

/* For common usage, assume one year = 365 days. */
if (! defined('YEAR_IN_MINUTES')) {
    define('YEAR_IN_MINUTES', 365 * DAY_IN_MINUTES);
}
