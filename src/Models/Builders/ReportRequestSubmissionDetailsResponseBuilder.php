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
use Form3PublicAPILib\Models\ReportRequestSubmission;
use Form3PublicAPILib\Models\ReportRequestSubmissionDetailsResponse;

/**
 * Builder for model ReportRequestSubmissionDetailsResponse
 *
 * @see ReportRequestSubmissionDetailsResponse
 */
class ReportRequestSubmissionDetailsResponseBuilder
{
    /**
     * @var ReportRequestSubmissionDetailsResponse
     */
    private $instance;

    private function __construct(ReportRequestSubmissionDetailsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report request submission details response Builder object.
     */
    public static function init(ReportRequestSubmission $data, Links $links): self
    {
        return new self(new ReportRequestSubmissionDetailsResponse($data, $links));
    }

    /**
     * Initializes a new report request submission details response object.
     */
    public function build(): ReportRequestSubmissionDetailsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
