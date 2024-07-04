<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Ace;
use Form3PublicAPILib\Models\AceCreation;

/**
 * Builder for model AceCreation
 *
 * @see AceCreation
 */
class AceCreationBuilder
{
    /**
     * @var AceCreation
     */
    private $instance;

    private function __construct(AceCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new ace creation Builder object.
     */
    public static function init(Ace $data): self
    {
        return new self(new AceCreation($data));
    }

    /**
     * Initializes a new ace creation object.
     */
    public function build(): AceCreation
    {
        return CoreHelper::clone($this->instance);
    }
}