<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes43;
use Form3PublicAPILib\Models\TransactionFileAdmission;
use Form3PublicAPILib\Models\TransactionFileAdmissionRelationships;

/**
 * Builder for model TransactionFileAdmission
 *
 * @see TransactionFileAdmission
 */
class TransactionFileAdmissionBuilder
{
    /**
     * @var TransactionFileAdmission
     */
    private $instance;

    private function __construct(TransactionFileAdmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction file admission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new TransactionFileAdmission($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes43 $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Sets created on field.
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Sets modified on field.
     */
    public function modifiedOn(?\DateTime $value): self
    {
        $this->instance->setModifiedOn($value);
        return $this;
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?TransactionFileAdmissionRelationships $value): self
    {
        $this->instance->setRelationships($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets version field.
     */
    public function version(?int $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Initializes a new transaction file admission object.
     */
    public function build(): TransactionFileAdmission
    {
        return CoreHelper::clone($this->instance);
    }
}
