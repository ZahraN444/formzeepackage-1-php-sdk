<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewAdviceSubmission;

/**
 * Builder for model NewAdviceSubmission
 *
 * @see NewAdviceSubmission
 */
class NewAdviceSubmissionBuilder
{
    /**
     * @var NewAdviceSubmission
     */
    private $instance;

    private function __construct(NewAdviceSubmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new advice submission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new NewAdviceSubmission($id, $organisationId));
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
     * Initializes a new new advice submission object.
     */
    public function build(): NewAdviceSubmission
    {
        return CoreHelper::clone($this->instance);
    }
}
