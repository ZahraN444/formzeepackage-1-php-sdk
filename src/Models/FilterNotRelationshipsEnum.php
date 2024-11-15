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

class FilterNotRelationshipsEnum
{
    public const DIRECT_DEBIT_SUBMISSIONS = 'direct_debit_submissions';

    public const DIRECT_DEBIT_ADMISSIONS = 'direct_debit_admissions';

    public const REVERSALS = 'reversals';

    public const RECALLS = 'recalls';

    public const RETURNS = 'returns';

    public const DECISIONS = 'decisions';

    private const _ALL_VALUES = [
        self::DIRECT_DEBIT_SUBMISSIONS,
        self::DIRECT_DEBIT_ADMISSIONS,
        self::REVERSALS,
        self::RECALLS,
        self::RETURNS,
        self::DECISIONS
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
        throw new Exception("$value is invalid for FilterNotRelationshipsEnum.");
    }
}
