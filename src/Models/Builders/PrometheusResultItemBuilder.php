<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\PrometheusResultItem;

/**
 * Builder for model PrometheusResultItem
 *
 * @see PrometheusResultItem
 */
class PrometheusResultItemBuilder
{
    /**
     * @var PrometheusResultItem
     */
    private $instance;

    private function __construct(PrometheusResultItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prometheus result item Builder object.
     */
    public static function init(): self
    {
        return new self(new PrometheusResultItem());
    }

    /**
     * Sets metric field.
     */
    public function metric(?array $value): self
    {
        $this->instance->setMetric($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?array $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Initializes a new prometheus result item object.
     */
    public function build(): PrometheusResultItem
    {
        return CoreHelper::clone($this->instance);
    }
}
