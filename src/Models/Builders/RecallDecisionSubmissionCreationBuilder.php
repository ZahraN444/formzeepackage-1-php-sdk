<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewRecallDecisionSubmission;
use Form3PublicAPILib\Models\RecallDecisionSubmissionCreation;

/**
 * Builder for model RecallDecisionSubmissionCreation
 *
 * @see RecallDecisionSubmissionCreation
 */
class RecallDecisionSubmissionCreationBuilder
{
    /**
     * @var RecallDecisionSubmissionCreation
     */
    private $instance;

    private function __construct(RecallDecisionSubmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recall decision submission creation Builder object.
     */
    public static function init(): self
    {
        return new self(new RecallDecisionSubmissionCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?NewRecallDecisionSubmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new recall decision submission creation object.
     */
    public function build(): RecallDecisionSubmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}