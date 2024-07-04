<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ClaimReversalSubmission;
use Form3PublicAPILib\Models\ClaimReversalSubmissionCreation;

/**
 * Builder for model ClaimReversalSubmissionCreation
 *
 * @see ClaimReversalSubmissionCreation
 */
class ClaimReversalSubmissionCreationBuilder
{
    /**
     * @var ClaimReversalSubmissionCreation
     */
    private $instance;

    private function __construct(ClaimReversalSubmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new claim reversal submission creation Builder object.
     */
    public static function init(ClaimReversalSubmission $data): self
    {
        return new self(new ClaimReversalSubmissionCreation($data));
    }

    /**
     * Initializes a new claim reversal submission creation object.
     */
    public function build(): ClaimReversalSubmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}
