<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Links;
use Form3PublicAPILib\Models\RecallDecisionAdmission;
use Form3PublicAPILib\Models\RecallDecisionAdmissionDetailsResponse;

/**
 * Builder for model RecallDecisionAdmissionDetailsResponse
 *
 * @see RecallDecisionAdmissionDetailsResponse
 */
class RecallDecisionAdmissionDetailsResponseBuilder
{
    /**
     * @var RecallDecisionAdmissionDetailsResponse
     */
    private $instance;

    private function __construct(RecallDecisionAdmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recall decision admission details response Builder object.
     */
    public static function init(): self
    {
        return new self(new RecallDecisionAdmissionDetailsResponse());
    }

    /**
     * Sets data field.
     */
    public function data(?RecallDecisionAdmission $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new recall decision admission details response object.
     */
    public function build(): RecallDecisionAdmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}