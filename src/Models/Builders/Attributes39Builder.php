<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes39;

/**
 * Builder for model Attributes39
 *
 * @see Attributes39
 */
class Attributes39Builder
{
    /**
     * @var Attributes39
     */
    private $instance;

    private function __construct(Attributes39 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attributes 39 Builder object.
     */
    public static function init(
        string $fileHash,
        int $fileSize,
        string $fileType,
        int $numberOfParts,
        string $paymentScheme
    ): self {
        return new self(new Attributes39($fileHash, $fileSize, $fileType, $numberOfParts, $paymentScheme));
    }

    /**
     * Initializes a new attributes 39 object.
     */
    public function build(): Attributes39
    {
        return CoreHelper::clone($this->instance);
    }
}
