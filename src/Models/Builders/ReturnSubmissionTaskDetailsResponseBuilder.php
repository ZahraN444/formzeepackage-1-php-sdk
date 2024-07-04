<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Links;
use Form3PublicAPILib\Models\ReturnSubmissionTask;
use Form3PublicAPILib\Models\ReturnSubmissionTaskDetailsResponse;

/**
 * Builder for model ReturnSubmissionTaskDetailsResponse
 *
 * @see ReturnSubmissionTaskDetailsResponse
 */
class ReturnSubmissionTaskDetailsResponseBuilder
{
    /**
     * @var ReturnSubmissionTaskDetailsResponse
     */
    private $instance;

    private function __construct(ReturnSubmissionTaskDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new return submission task details response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReturnSubmissionTaskDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?ReturnSubmissionTask $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new return submission task details response object.
     */
    public function build(): ReturnSubmissionTaskDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
