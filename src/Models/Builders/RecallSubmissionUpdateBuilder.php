<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\Attributes61;
use Form3PublicAPILib\Models\RecallSubmissionUpdate;

/**
 * Builder for model RecallSubmissionUpdate
 *
 * @see RecallSubmissionUpdate
 */
class RecallSubmissionUpdateBuilder
{
    /**
     * @var RecallSubmissionUpdate
     */
    private $instance;

    private function __construct(RecallSubmissionUpdate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new recall submission update Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new RecallSubmissionUpdate($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?Attributes61 $value): self
    {
        $this->instance->setAttributes($value);
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
     * Initializes a new recall submission update object.
     */
    public function build(): RecallSubmissionUpdate
    {
        return CoreHelper::clone($this->instance);
    }
}