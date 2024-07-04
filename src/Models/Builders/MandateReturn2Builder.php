<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\MandateReturn2;

/**
 * Builder for model MandateReturn2
 *
 * @see MandateReturn2
 */
class MandateReturn2Builder
{
    /**
     * @var MandateReturn2
     */
    private $instance;

    private function __construct(MandateReturn2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new mandate return 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new MandateReturn2());
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
     * Initializes a new mandate return 2 object.
     */
    public function build(): MandateReturn2
    {
        return CoreHelper::clone($this->instance);
    }
}
