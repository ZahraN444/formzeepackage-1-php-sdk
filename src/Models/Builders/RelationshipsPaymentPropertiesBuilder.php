<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipsPaymentProperties;

/**
 * Builder for model RelationshipsPaymentProperties
 *
 * @see RelationshipsPaymentProperties
 */
class RelationshipsPaymentPropertiesBuilder
{
    /**
     * @var RelationshipsPaymentProperties
     */
    private $instance;

    private function __construct(RelationshipsPaymentProperties $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationships payment properties Builder object.
     */
    public static function init(string $id): self
    {
        return new self(new RelationshipsPaymentProperties($id));
    }

    /**
     * Initializes a new relationships payment properties object.
     */
    public function build(): RelationshipsPaymentProperties
    {
        return CoreHelper::clone($this->instance);
    }
}
