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

class DirectDebitResourceTypeEnum
{
    public const DIRECT_DEBITS = 'direct_debits';

    public const DIRECT_DEBIT_STATUS = 'direct_debit_status';

    public const DIRECT_DEBIT_ADMISSIONS = 'direct_debit_admissions';

    public const DIRECT_DEBIT_SUBMISSIONS = 'direct_debit_submissions';

    public const DIRECT_DEBIT_SUBMISSION_VALIDATIONS = 'direct_debit_submission_validations';

    public const DIRECT_DEBIT_REVERSALS = 'direct_debit_reversals';

    public const DIRECT_DEBIT_REVERSAL_ADMISSIONS = 'direct_debit_reversal_admissions';

    public const DIRECT_DEBIT_REVERSAL_SUBMISSIONS = 'direct_debit_reversal_submissions';

    public const DIRECT_DEBIT_REVERSAL_SUBMISSION_VALIDATIONS = 'direct_debit_reversal_submission_validations';

    public const DIRECT_DEBIT_RETURNS = 'direct_debit_returns';

    public const DIRECT_DEBIT_RETURN_ADMISSIONS = 'direct_debit_return_admissions';

    public const DIRECT_DEBIT_RETURN_SUBMISSIONS = 'direct_debit_return_submissions';

    public const DIRECT_DEBIT_RETURN_SUBMISSION_VALIDATIONS = 'direct_debit_return_submission_validations';

    public const DIRECT_DEBIT_RETURN_REVERSALS = 'direct_debit_return_reversals';

    public const DIRECT_DEBIT_RETURN_REVERSAL_ADMISSIONS = 'direct_debit_return_reversal_admissions';

    public const DIRECT_DEBIT_AUTOMATIC_RETURNS = 'direct_debit_automatic_returns';

    public const DIRECT_DEBIT_RECALLS = 'direct_debit_recalls';

    public const DIRECT_DEBIT_RECALL_ADMISSIONS = 'direct_debit_recall_admissions';

    public const DIRECT_DEBIT_RECALL_SUBMISSIONS = 'direct_debit_recall_submissions';

    public const DIRECT_DEBIT_RECALL_SUBMISSION_VALIDATIONS = 'direct_debit_recall_submission_validations';

    public const DIRECT_DEBIT_DECISIONS = 'direct_debit_decisions';

    public const DIRECT_DEBIT_DECISION_ADMISSIONS = 'direct_debit_decision_admissions';

    public const DIRECT_DEBIT_DECISION_SUBMISSIONS = 'direct_debit_decision_submissions';

    public const DIRECT_DEBIT_DECISION_SUBMISSION_VALIDATIONS = 'direct_debit_decision_submission_validations';

    public const DIRECT_DEBIT_SUBMISSIONS_WITH_FINAL_STATE = 'direct_debit_submissions_with_final_state';

    public const DIRECT_DEBIT_RETURN_SUBMISSIONS_WITH_FINAL_STATE = 'direct_debit_return_submissions_with_final_state';

    private const _ALL_VALUES = [
        self::DIRECT_DEBITS,
        self::DIRECT_DEBIT_STATUS,
        self::DIRECT_DEBIT_ADMISSIONS,
        self::DIRECT_DEBIT_SUBMISSIONS,
        self::DIRECT_DEBIT_SUBMISSION_VALIDATIONS,
        self::DIRECT_DEBIT_REVERSALS,
        self::DIRECT_DEBIT_REVERSAL_ADMISSIONS,
        self::DIRECT_DEBIT_REVERSAL_SUBMISSIONS,
        self::DIRECT_DEBIT_REVERSAL_SUBMISSION_VALIDATIONS,
        self::DIRECT_DEBIT_RETURNS,
        self::DIRECT_DEBIT_RETURN_ADMISSIONS,
        self::DIRECT_DEBIT_RETURN_SUBMISSIONS,
        self::DIRECT_DEBIT_RETURN_SUBMISSION_VALIDATIONS,
        self::DIRECT_DEBIT_RETURN_REVERSALS,
        self::DIRECT_DEBIT_RETURN_REVERSAL_ADMISSIONS,
        self::DIRECT_DEBIT_AUTOMATIC_RETURNS,
        self::DIRECT_DEBIT_RECALLS,
        self::DIRECT_DEBIT_RECALL_ADMISSIONS,
        self::DIRECT_DEBIT_RECALL_SUBMISSIONS,
        self::DIRECT_DEBIT_RECALL_SUBMISSION_VALIDATIONS,
        self::DIRECT_DEBIT_DECISIONS,
        self::DIRECT_DEBIT_DECISION_ADMISSIONS,
        self::DIRECT_DEBIT_DECISION_SUBMISSIONS,
        self::DIRECT_DEBIT_DECISION_SUBMISSION_VALIDATIONS,
        self::DIRECT_DEBIT_SUBMISSIONS_WITH_FINAL_STATE,
        self::DIRECT_DEBIT_RETURN_SUBMISSIONS_WITH_FINAL_STATE
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
        throw new Exception("$value is invalid for DirectDebitResourceTypeEnum.");
    }
}
