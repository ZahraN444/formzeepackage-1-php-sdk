<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BranchIdentificationEventData;
use Form3PublicAPILib\Models\BranchIdentificationEventResponse;

/**
 * Builder for model BranchIdentificationEventResponse
 *
 * @see BranchIdentificationEventResponse
 */
class BranchIdentificationEventResponseBuilder
{
    /**
     * @var BranchIdentificationEventResponse
     */
    private $instance;

    private function __construct(BranchIdentificationEventResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new branch identification event response Builder object.
     */
    public static function init(): self
    {
        return new self(new BranchIdentificationEventResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?BranchIdentificationEventData $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new branch identification event response object.
     */
    public function build(): BranchIdentificationEventResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
