<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountIdentificationAttributes;

/**
 * Builder for model AccountIdentificationAttributes
 *
 * @see AccountIdentificationAttributes
 */
class AccountIdentificationAttributesBuilder
{
    /**
     * @var AccountIdentificationAttributes
     */
    private $instance;

    private function __construct(AccountIdentificationAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account identification attributes Builder object.
     */
    public static function init(string $secondaryIdentification): self
    {
        return new self(new AccountIdentificationAttributes($secondaryIdentification));
    }

    /**
     * Initializes a new account identification attributes object.
     */
    public function build(): AccountIdentificationAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
