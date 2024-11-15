<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes52;

/**
 * Builder for model Attributes52
 *
 * @see Attributes52
 */
class Attributes52Builder
{
    /**
     * @var Attributes52
     */
    private $instance;

    private function __construct(Attributes52 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 52 Builder object.
     */
    public static function init(
        string $fileFormat,
        string $fileHash,
        int $fileSize,
        int $numberOfParts,
        int $transactionCount
    ): self {
        return new self(new Attributes52($fileFormat, $fileHash, $fileSize, $numberOfParts, $transactionCount));
    }

    /**
     * Sets transaction sum field.
     */
    public function transactionSum(?string $value): self
    {
        $this->instance->setTransactionSum($value);
        return $this;
    }

    /**
     * Initializes a new attributes 52 object.
     */
    public function build(): Attributes52
    {
        return CoreHelper::clone($this->instance);
    }
}
