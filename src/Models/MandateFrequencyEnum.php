<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

class MandateFrequencyEnum
{
    public const DAILY = 'daily';

    public const WEEKLY = 'weekly';

    public const FORTNIGHTLY = 'fortnightly';

    public const MONTHLY = 'monthly';

    public const BIMONTHLY = 'bimonthly';

    public const QUARTERLY = 'quarterly';

    public const YEARLY = 'yearly';

    private const _ALL_VALUES =
        [
            self::DAILY,
            self::WEEKLY,
            self::FORTNIGHTLY,
            self::MONTHLY,
            self::BIMONTHLY,
            self::QUARTERLY,
            self::YEARLY
        ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for MandateFrequencyEnum.");
    }
}
