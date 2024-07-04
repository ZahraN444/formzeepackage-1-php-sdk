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

/**
 * [Status of the submission](https://api-docs.form3.tech/api.html#enumerations-payment-status-codes-
 * submission-status)
 */
class PaymentSubmissionStatusEnum
{
    public const ACCEPTED = 'accepted';

    public const LIMIT_CHECK_PENDING = 'limit_check_pending';

    public const LIMIT_CHECK_FAILED = 'limit_check_failed';

    public const LIMIT_CHECK_PASSED = 'limit_check_passed';

    public const RELEASED_TO_GATEWAY = 'released_to_gateway';

    public const QUEUED_FOR_DELIVERY = 'queued_for_delivery';

    public const DELIVERY_CONFIRMED = 'delivery_confirmed';

    public const DELIVERY_FAILED = 'delivery_failed';

    public const SUBMITTED = 'submitted';

    public const VALIDATION_PENDING = 'validation_pending';

    private const _ALL_VALUES = [
        self::ACCEPTED,
        self::LIMIT_CHECK_PENDING,
        self::LIMIT_CHECK_FAILED,
        self::LIMIT_CHECK_PASSED,
        self::RELEASED_TO_GATEWAY,
        self::QUEUED_FOR_DELIVERY,
        self::DELIVERY_CONFIRMED,
        self::DELIVERY_FAILED,
        self::SUBMITTED,
        self::VALIDATION_PENDING
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
        throw new Exception("$value is invalid for PaymentSubmissionStatusEnum.");
    }
}
