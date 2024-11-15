<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\RelationshipPaymentSubmissionTasks;

/**
 * Builder for model RelationshipPaymentSubmissionTasks
 *
 * @see RelationshipPaymentSubmissionTasks
 */
class RelationshipPaymentSubmissionTasksBuilder
{
    /**
     * @var RelationshipPaymentSubmissionTasks
     */
    private $instance;

    private function __construct(RelationshipPaymentSubmissionTasks $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new relationship payment submission tasks Builder object.
     */
    public static function init(): self
    {
        return new self(new RelationshipPaymentSubmissionTasks());
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
     * Initializes a new relationship payment submission tasks object.
     */
    public function build(): RelationshipPaymentSubmissionTasks
    {
        return CoreHelper::clone($this->instance);
    }
}
