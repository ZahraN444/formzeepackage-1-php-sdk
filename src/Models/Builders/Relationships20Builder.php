<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipLinks;
use Form3PublicAPILib\Models\Relationships20;

/**
 * Builder for model Relationships20
 *
 * @see Relationships20
 */
class Relationships20Builder
{
    /**
     * @var Relationships20
     */
    private $instance;

    private function __construct(Relationships20 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships 20 Builder object.
     */
    public static function init(): self
    {
        return new self(new Relationships20());
    }

    /**
     * Sets decision admission field.
     */
    public function decisionAdmission(?RelationshipLinks $value): self
    {
        $this->instance->setDecisionAdmission($value);
        return $this;
    }

    /**
     * Sets decision submission field.
     */
    public function decisionSubmission(?RelationshipLinks $value): self
    {
        $this->instance->setDecisionSubmission($value);
        return $this;
    }

    /**
     * Sets payment field.
     */
    public function payment(?RelationshipLinks $value): self
    {
        $this->instance->setPayment($value);
        return $this;
    }

    /**
     * Sets recall field.
     */
    public function recall(?RelationshipLinks $value): self
    {
        $this->instance->setRecall($value);
        return $this;
    }

    /**
     * Initializes a new relationships 20 object.
     */
    public function build(): Relationships20
    {
        return CoreHelper::clone($this->instance);
    }
}
