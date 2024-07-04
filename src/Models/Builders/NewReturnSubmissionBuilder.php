<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewReturnSubmission;
use Form3PublicAPILib\Models\ReturnSubmissionRelationships;

/**
 * Builder for model NewReturnSubmission
 *
 * @see NewReturnSubmission
 */
class NewReturnSubmissionBuilder
{
    /**
     * @var NewReturnSubmission
     */
    private $instance;

    private function __construct(NewReturnSubmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new return submission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new NewReturnSubmission($id, $organisationId));
    }

    /**
     * Sets relationships field.
     */
    public function relationships(?ReturnSubmissionRelationships $value): self
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
     * Initializes a new new return submission object.
     */
    public function build(): NewReturnSubmission
    {
        return CoreHelper::clone($this->instance);
    }
}