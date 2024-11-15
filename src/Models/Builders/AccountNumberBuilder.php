<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountNumber;
use Form3PublicAPILib\Models\Relationships;

/**
 * Builder for model AccountNumber
 *
 * @see AccountNumber
 */
class AccountNumberBuilder
{
    /**
     * @var AccountNumber
     */
    private $instance;

    private function __construct(AccountNumber $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account number Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountNumber());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?Relationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new account number object.
     */
    public function build(): AccountNumber
    {
        return CoreHelper::clone($this->instance);
    }
}
