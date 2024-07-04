<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AdviceSubmissionCreation;
use Form3PublicAPILib\Models\NewAdviceSubmission;

/**
 * Builder for model AdviceSubmissionCreation
 *
 * @see AdviceSubmissionCreation
 */
class AdviceSubmissionCreationBuilder
{
    /**
     * @var AdviceSubmissionCreation
     */
    private $instance;

    private function __construct(AdviceSubmissionCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new advice submission creation Builder object.
     */
    public static function init(): self
    {
        return new self(new AdviceSubmissionCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?NewAdviceSubmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new advice submission creation object.
     */
    public function build(): AdviceSubmissionCreation
    {
        return CoreHelper::clone($this->instance);
    }
}