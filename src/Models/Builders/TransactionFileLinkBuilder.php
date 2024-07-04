<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Meta;
use Form3PublicAPILib\Models\TransactionFileLink;

/**
 * Builder for model TransactionFileLink
 *
 * @see TransactionFileLink
 */
class TransactionFileLinkBuilder
{
    /**
     * @var TransactionFileLink
     */
    private $instance;

    private function __construct(TransactionFileLink $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction file link Builder object.
     */
    public static function init(string $href): self
    {
        return new self(new TransactionFileLink($href));
    }

    /**
     * Sets meta field.
     */
    public function meta(?Meta $value): self
    {
        $this->instance->setMeta($value);
        return $this;
    }

    /**
     * Initializes a new transaction file link object.
     */
    public function build(): TransactionFileLink
    {
        return CoreHelper::clone($this->instance);
    }
}