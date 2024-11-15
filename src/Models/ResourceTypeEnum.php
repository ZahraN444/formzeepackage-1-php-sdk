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

class ResourceTypeEnum
{
    public const ACCOUNT_INDIRECTS = 'account_indirects';

    public const ACCOUNTS = 'accounts';

    public const PAYMENTS = 'payments';

    public const REVERSALS = 'reversals';

    public const RECALL_DECISION_SUBMISSION_VALIDATIONS = 'recall_decision_submission_validations';

    public const RECALL_DECISION_ADMISSIONS = 'recall_decision_admissions';

    public const NAME_VERIFICATION_SUBMISSIONS = 'name_verification_submissions';

    public const PAYMENT_BATCHES = 'payment_batches';

    public const RETURN_REVERSAL_ADMISSIONS = 'return_reversal_admissions';

    public const BRANCHES = 'branches';

    public const PAYMENT_ADVICES = 'payment_advices';

    public const RECALL_ADMISSIONS = 'recall_admissions';

    public const BRANCH_IDENTIFICATIONS = 'branch_identifications';

    public const PAYMENT_ADVICE_SUBMISSIONS = 'payment_advice_submissions';

    public const SCHEME_MESSAGES = 'scheme_messages';

    public const PAYMENT_ADMISSION_TASKS = 'payment_admission_tasks';

    public const PAYMENT_ADVICE_SUBMISSION_VALIDATIONS = 'payment_advice_submission_validations';

    public const FX_DEALS = 'fx_deals';

    public const CONTACTS = 'contacts';

    public const NAME_VERIFICATIONS = 'name_verifications';

    public const RECALL_REVERSALS = 'recall_reversals';

    public const BANK_IDS = 'bank_ids';

    public const PAYMENT_AUTOMATIC_RETURNS = 'payment_automatic_returns';

    public const ACCOUNT_IDENTIFICATIONS = 'account_identifications';

    public const LIMITS = 'limits';

    public const RETURN_SUBMISSION_TASKS = 'return_submission_tasks';

    public const PAYMENT_SUBMISSION_VALIDATIONS = 'payment_submission_validations';

    public const NAME_VERIFICATION_ADMISSIONS = 'name_verification_admissions';

    public const PAYMENT_SUBMISSION_TASKS = 'payment_submission_tasks';

    public const RETURN_REVERSALS = 'return_reversals';

    public const BICS = 'bics';

    public const RECALL_SUBMISSION_VALIDATIONS = 'recall_submission_validations';

    public const RECALL_REVERSAL_ADMISSIONS = 'recall_reversal_admissions';

    public const REVERSAL_ADMISSION_TASKS = 'reversal_admission_tasks';

    public const PAYMENT_ADMISSIONS = 'payment_admissions';

    public const REVERSAL_SUBMISSION_VALIDATIONS = 'reversal_submission_validations';

    public const PAYMENT_DEFAULTS = 'payment_defaults';

    public const RETURN_ADMISSIONS = 'return_admissions';

    public const PARTY_ACCOUNTS = 'party_accounts';

    public const ACCOUNT_EVENTS = 'account_events';

    public const POSITIONS = 'positions';

    public const REVERSAL_SUBMISSIONS = 'reversal_submissions';

    public const RECALL_DECISIONS = 'recall_decisions';

    public const RETURN_SUBMISSIONS = 'return_submissions';

    public const CONTACT_ACCOUNTS = 'contact_accounts';

    public const DIRECT_ACCOUNT = 'direct_account';

    public const RECALL_DECISION_SUBMISSIONS = 'recall_decision_submissions';

    public const RECALL_SUBMISSIONS = 'recall_submissions';

    public const SCHEME_MESSAGE_ADMISSIONS = 'scheme_message_admissions';

    public const ACCOUNT_ROUTINGS = 'account_routings';

    public const PARTIES = 'parties';

    public const REVERSAL_ADMISSIONS = 'reversal_admissions';

    public const ACCOUNT_CONFIGURATIONS = 'account_configurations';

    public const RETURNS = 'returns';

    public const RETURN_SUBMISSION_VALIDATIONS = 'return_submission_validations';

    public const RECALLS = 'recalls';

    public const PAYMENT_SUBMISSIONS = 'payment_submissions';

    private const _ALL_VALUES = [
        self::ACCOUNT_INDIRECTS,
        self::ACCOUNTS,
        self::PAYMENTS,
        self::REVERSALS,
        self::RECALL_DECISION_SUBMISSION_VALIDATIONS,
        self::RECALL_DECISION_ADMISSIONS,
        self::NAME_VERIFICATION_SUBMISSIONS,
        self::PAYMENT_BATCHES,
        self::RETURN_REVERSAL_ADMISSIONS,
        self::BRANCHES,
        self::PAYMENT_ADVICES,
        self::RECALL_ADMISSIONS,
        self::BRANCH_IDENTIFICATIONS,
        self::PAYMENT_ADVICE_SUBMISSIONS,
        self::SCHEME_MESSAGES,
        self::PAYMENT_ADMISSION_TASKS,
        self::PAYMENT_ADVICE_SUBMISSION_VALIDATIONS,
        self::FX_DEALS,
        self::CONTACTS,
        self::NAME_VERIFICATIONS,
        self::RECALL_REVERSALS,
        self::BANK_IDS,
        self::PAYMENT_AUTOMATIC_RETURNS,
        self::ACCOUNT_IDENTIFICATIONS,
        self::LIMITS,
        self::RETURN_SUBMISSION_TASKS,
        self::PAYMENT_SUBMISSION_VALIDATIONS,
        self::NAME_VERIFICATION_ADMISSIONS,
        self::PAYMENT_SUBMISSION_TASKS,
        self::RETURN_REVERSALS,
        self::BICS,
        self::RECALL_SUBMISSION_VALIDATIONS,
        self::RECALL_REVERSAL_ADMISSIONS,
        self::REVERSAL_ADMISSION_TASKS,
        self::PAYMENT_ADMISSIONS,
        self::REVERSAL_SUBMISSION_VALIDATIONS,
        self::PAYMENT_DEFAULTS,
        self::RETURN_ADMISSIONS,
        self::PARTY_ACCOUNTS,
        self::ACCOUNT_EVENTS,
        self::POSITIONS,
        self::REVERSAL_SUBMISSIONS,
        self::RECALL_DECISIONS,
        self::RETURN_SUBMISSIONS,
        self::CONTACT_ACCOUNTS,
        self::DIRECT_ACCOUNT,
        self::RECALL_DECISION_SUBMISSIONS,
        self::RECALL_SUBMISSIONS,
        self::SCHEME_MESSAGE_ADMISSIONS,
        self::ACCOUNT_ROUTINGS,
        self::PARTIES,
        self::REVERSAL_ADMISSIONS,
        self::ACCOUNT_CONFIGURATIONS,
        self::RETURNS,
        self::RETURN_SUBMISSION_VALIDATIONS,
        self::RECALLS,
        self::PAYMENT_SUBMISSIONS
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
        throw new Exception("$value is invalid for ResourceTypeEnum.");
    }
}
