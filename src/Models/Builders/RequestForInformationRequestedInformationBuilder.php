<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RequestForInformationRequestedInformation;

/**
 * Builder for model RequestForInformationRequestedInformation
 *
 * @see RequestForInformationRequestedInformation
 */
class RequestForInformationRequestedInformationBuilder
{
    /**
     * @var RequestForInformationRequestedInformation
     */
    private $instance;

    private function __construct(RequestForInformationRequestedInformation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new request for information requested information Builder object.
     */
    public static function init(string $code, string $type): self
    {
        return new self(new RequestForInformationRequestedInformation($code, $type));
    }

    /**
     * Sets additional information field.
     */
    public function additionalInformation(?string $value): self
    {
        $this->instance->setAdditionalInformation($value);
        return $this;
    }

    /**
     * Initializes a new request for information requested information object.
     */
    public function build(): RequestForInformationRequestedInformation
    {
        return CoreHelper::clone($this->instance);
    }
}
