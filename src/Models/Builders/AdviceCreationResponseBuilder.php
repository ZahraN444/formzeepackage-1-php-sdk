<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AdviceCreationResponse;
use Form3PublicAPILib\Models\Links;
use Form3PublicAPILib\Models\PaymentAdvice;

/**
 * Builder for model AdviceCreationResponse
 *
 * @see AdviceCreationResponse
 */
class AdviceCreationResponseBuilder
{
    /**
     * @var AdviceCreationResponse
     */
    private $instance;

    private function __construct(AdviceCreationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new advice creation response Builder object.
     */
    public static function init(): self
    {
        return new self(new AdviceCreationResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?PaymentAdvice $value): self
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
     * Initializes a new advice creation response object.
     */
    public function build(): AdviceCreationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
