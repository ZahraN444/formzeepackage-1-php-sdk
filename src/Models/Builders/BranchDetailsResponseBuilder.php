<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Branch;
use Form3PublicAPILib\Models\BranchDetailsResponse;
use Form3PublicAPILib\Models\Links;

/**
 * Builder for model BranchDetailsResponse
 *
 * @see BranchDetailsResponse
 */
class BranchDetailsResponseBuilder
{
    /**
     * @var BranchDetailsResponse
     */
    private $instance;

    private function __construct(BranchDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new branch details response Builder object.
     */
    public static function init(): self
    {
        return new self(new BranchDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?Branch $value): self
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
     * Initializes a new branch details response object.
     */
    public function build(): BranchDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
