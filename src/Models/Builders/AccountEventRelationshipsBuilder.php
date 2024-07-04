<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountEventRelationships;
use Form3PublicAPILib\Models\RelationshipAccount;

/**
 * Builder for model AccountEventRelationships
 *
 * @see AccountEventRelationships
 */
class AccountEventRelationshipsBuilder
{
    /**
     * @var AccountEventRelationships
     */
    private $instance;

    private function __construct(AccountEventRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account event relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountEventRelationships());
    }

    /**
     * Sets account field.
     */
    public function account(?RelationshipAccount $value): self
    {
        $this->instance->setAccount($value);
        return $this;
    }

    /**
     * Initializes a new account event relationships object.
     */
    public function build(): AccountEventRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}
