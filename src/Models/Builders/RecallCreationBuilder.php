<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewRecall;
use Form3PublicAPILib\Models\RecallCreation;

/**
 * Builder for model RecallCreation
 *
 * @see RecallCreation
 */
class RecallCreationBuilder
{
    /**
     * @var RecallCreation
     */
    private $instance;

    private function __construct(RecallCreation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recall creation Builder object.
     */
    public static function init(): self
    {
        return new self(new RecallCreation());
    }

    /**
     * Sets data field.
     */
    public function data(?NewRecall $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new recall creation object.
     */
    public function build(): RecallCreation
    {
        return CoreHelper::clone($this->instance);
    }
}