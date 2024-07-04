<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\AccountIdentificationRelationships;
use Form3PublicAPILib\Models\RelationshipLinks;

/**
 * Builder for model AccountIdentificationRelationships
 *
 * @see AccountIdentificationRelationships
 */
class AccountIdentificationRelationshipsBuilder
{
    /**
     * @var AccountIdentificationRelationships
     */
    private $instance;

    private function __construct(AccountIdentificationRelationships $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account identification relationships Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountIdentificationRelationships());
    }

    /**
     * Sets account field.
     */
    public function account(?RelationshipLinks $value): self
    {
        $this->instance->setAccount($value);
        return $this;
    }

    /**
     * Initializes a new account identification relationships object.
     */
    public function build(): AccountIdentificationRelationships
    {
        return CoreHelper::clone($this->instance);
    }
}