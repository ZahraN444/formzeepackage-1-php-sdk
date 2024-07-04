<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewPaymentSubmission;
use Form3PublicAPILib\Models\Relationships19;

/**
 * Builder for model NewPaymentSubmission
 *
 * @see NewPaymentSubmission
 */
class NewPaymentSubmissionBuilder
{
    /**
     * @var NewPaymentSubmission
     */
    private $instance;

    private function __construct(NewPaymentSubmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new payment submission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new NewPaymentSubmission($id, $organisationId));
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?Relationships19 $value): self
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
     * Initializes a new new payment submission object.
     */
    public function build(): NewPaymentSubmission
    {
        return CoreHelper::clone($this->instance);
    }
}
