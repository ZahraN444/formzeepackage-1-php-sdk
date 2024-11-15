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

class ClaimResourceTypeEnum
{
    public const CLAIMS = 'claims';

    public const CLAIM_SUBMISSIONS = 'claim_submissions';

    public const CLAIM_SUBMISSION_VALIDATIONS = 'claim_submission_validations';

    public const CLAIM_REVERSALS = 'claim_reversals';

    public const CLAIM_REVERSAL_SUBMISSIONS = 'claim_reversal_submissions';

    public const CLAIM_REVERSAL_SUBMISSION_VALIDATIONS = 'claim_reversal_submission_validations';

    private const _ALL_VALUES = [
        self::CLAIMS,
        self::CLAIM_SUBMISSIONS,
        self::CLAIM_SUBMISSION_VALIDATIONS,
        self::CLAIM_REVERSALS,
        self::CLAIM_REVERSAL_SUBMISSIONS,
        self::CLAIM_REVERSAL_SUBMISSION_VALIDATIONS
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
        throw new Exception("$value is invalid for ClaimResourceTypeEnum.");
    }
}
