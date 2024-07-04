<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\TransactionFileLink;
use Form3PublicAPILib\Models\TransactionFileLinks;

/**
 * Builder for model TransactionFileLinks
 *
 * @see TransactionFileLinks
 */
class TransactionFileLinksBuilder
{
    /**
     * @var TransactionFileLinks
     */
    private $instance;

    private function __construct(TransactionFileLinks $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction file links Builder object.
     */
    public static function init(TransactionFileLink $self): self
    {
        return new self(new TransactionFileLinks($self));
    }

    /**
     * Initializes a new transaction file links object.
     */
    public function build(): TransactionFileLinks
    {
        return CoreHelper::clone($this->instance);
    }
}