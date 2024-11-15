<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReportLink;
use Form3PublicAPILib\Models\ReportLinks;

/**
 * Builder for model ReportLinks
 *
 * @see ReportLinks
 */
class ReportLinksBuilder
{
    /**
     * @var ReportLinks
     */
    private $instance;

    private function __construct(ReportLinks $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report links Builder object.
     */
    public static function init(ReportLink $self): self
    {
        return new self(new ReportLinks($self));
    }

    /**
     * Initializes a new report links object.
     */
    public function build(): ReportLinks
    {
        return CoreHelper::clone($this->instance);
    }
}
