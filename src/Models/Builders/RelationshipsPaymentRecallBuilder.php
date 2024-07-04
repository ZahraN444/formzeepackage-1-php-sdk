<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipsPaymentRecall;

/**
 * Builder for model RelationshipsPaymentRecall
 *
 * @see RelationshipsPaymentRecall
 */
class RelationshipsPaymentRecallBuilder
{
    /**
     * @var RelationshipsPaymentRecall
     */
    private $instance;

    private function __construct(RelationshipsPaymentRecall $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships payment recall Builder object.
     */
    public static function init(): self
    {
        return new self(new RelationshipsPaymentRecall());
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new relationships payment recall object.
     */
    public function build(): RelationshipsPaymentRecall
    {
        return CoreHelper::clone($this->instance);
    }
}
