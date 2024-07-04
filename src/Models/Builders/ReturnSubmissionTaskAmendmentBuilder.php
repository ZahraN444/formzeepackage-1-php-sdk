<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReturnSubmissionTaskAmendment;
use Form3PublicAPILib\Models\ReturnSubmissionTaskUpdate;

/**
 * Builder for model ReturnSubmissionTaskAmendment
 *
 * @see ReturnSubmissionTaskAmendment
 */
class ReturnSubmissionTaskAmendmentBuilder
{
    /**
     * @var ReturnSubmissionTaskAmendment
     */
    private $instance;

    private function __construct(ReturnSubmissionTaskAmendment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return submission task amendment Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnSubmissionTaskAmendment());
    }

    /**
     * Sets data field.
     */
    public function data(?ReturnSubmissionTaskUpdate $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new return submission task amendment object.
     */
    public function build(): ReturnSubmissionTaskAmendment
    {
        return CoreHelper::clone($this->instance);
    }
}
