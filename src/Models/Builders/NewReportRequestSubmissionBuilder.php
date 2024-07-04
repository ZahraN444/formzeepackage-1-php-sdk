<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewReportRequestSubmission;
use Form3PublicAPILib\Models\NewReportRequestSubmissionAttributes;

/**
 * Builder for model NewReportRequestSubmission
 *
 * @see NewReportRequestSubmission
 */
class NewReportRequestSubmissionBuilder
{
    /**
     * @var NewReportRequestSubmission
     */
    private $instance;

    private function __construct(NewReportRequestSubmission $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new report request submission Builder object.
     */
    public static function init(string $id, string $organisationId): self
    {
        return new self(new NewReportRequestSubmission($id, $organisationId));
    }

    /**
     * Sets attributes field.
     */
    public function attributes(?NewReportRequestSubmissionAttributes $value): self
    {
        $this->instance->setAttributes($value);
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
     * Initializes a new new report request submission object.
     */
    public function build(): NewReportRequestSubmission
    {
        return CoreHelper::clone($this->instance);
    }
}
