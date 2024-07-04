<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\DirectDebitDecisionAdmission2;

/**
 * Builder for model DirectDebitDecisionAdmission2
 *
 * @see DirectDebitDecisionAdmission2
 */
class DirectDebitDecisionAdmission2Builder
{
    /**
     * @var DirectDebitDecisionAdmission2
     */
    private $instance;

    private function __construct(DirectDebitDecisionAdmission2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new direct debit decision admission 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitDecisionAdmission2());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new direct debit decision admission 2 object.
     */
    public function build(): DirectDebitDecisionAdmission2
    {
        return CoreHelper::clone($this->instance);
    }
}
