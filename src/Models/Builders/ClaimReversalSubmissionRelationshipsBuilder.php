<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Claim1;
use Form3PublicAPILib\Models\ClaimReversal2;
use Form3PublicAPILib\Models\ClaimReversalSubmissionRelationships;

/**
 * Builder for model ClaimReversalSubmissionRelationships
 *
 * @see ClaimReversalSubmissionRelationships
 */
class ClaimReversalSubmissionRelationshipsBuilder
{
    /**
     * @var ClaimReversalSubmissionRelationships
     */
    private $instance;

    private function __construct(ClaimReversalSubmissionRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new claim reversal submission relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new ClaimReversalSubmissionRelationships());
    }

    /**
     * Sets claim field.
     */
    public function claim(?Claim1 $value): self
    {
        $this->instance->setClaim($value);
        return $this;
    }

    /**
     * Sets claim reversal field.
     */
    public function claimReversal(?ClaimReversal2 $value): self
    {
        $this->instance->setClaimReversal($value);
        return $this;
    }

    /**
     * Initializes a new claim reversal submission relationships object.
     */
    public function build(): ClaimReversalSubmissionRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}