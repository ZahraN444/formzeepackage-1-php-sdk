<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebit1;
use Form3PublicAPILib\Models\DirectDebitDecision2;
use Form3PublicAPILib\Models\DirectDebitDecisionAdmissionRelationships;

/**
 * Builder for model DirectDebitDecisionAdmissionRelationships
 *
 * @see DirectDebitDecisionAdmissionRelationships
 */
class DirectDebitDecisionAdmissionRelationshipsBuilder
{
    /**
     * @var DirectDebitDecisionAdmissionRelationships
     */
    private $instance;

    private function __construct(DirectDebitDecisionAdmissionRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit decision admission relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitDecisionAdmissionRelationships());
    }

    /**
     * Sets direct debit field.
     */
    public function directDebit(?DirectDebit1 $value): self
    {
        $this->instance->setDirectDebit($value);
        return $this;
    }

    /**
     * Sets direct debit decision field.
     */
    public function directDebitDecision(?DirectDebitDecision2 $value): self
    {
        $this->instance->setDirectDebitDecision($value);
        return $this;
    }

    /**
     * Initializes a new direct debit decision admission relationships object.
     */
    public function build(): DirectDebitDecisionAdmissionRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}