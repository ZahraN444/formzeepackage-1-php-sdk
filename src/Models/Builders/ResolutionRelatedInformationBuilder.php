<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ResolutionRelatedInformation;

/**
 * Builder for model ResolutionRelatedInformation
 *
 * @see ResolutionRelatedInformation
 */
class ResolutionRelatedInformationBuilder
{
    /**
     * @var ResolutionRelatedInformation
     */
    private $instance;

    private function __construct(ResolutionRelatedInformation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new resolution related information Builder object.
     */
    public static function init(): self
    {
        return new self(new ResolutionRelatedInformation());
    }

    /**
     * Sets clearing channel field.
     */
    public function clearingChannel(?string $value): self
    {
        $this->instance->setClearingChannel($value);
        return $this;
    }

    /**
     * Sets references field.
     */
    public function references(?array $value): self
    {
        $this->instance->setReferences($value);
        return $this;
    }

    /**
     * Sets settlement date field.
     */
    public function settlementDate(?\DateTime $value): self
    {
        $this->instance->setSettlementDate($value);
        return $this;
    }

    /**
     * Initializes a new resolution related information object.
     */
    public function build(): ResolutionRelatedInformation
    {
        return CoreHelper::clone($this->instance);
    }
}
