<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SchemeFileLink;
use Form3PublicAPILib\Models\SchemeFileLinks;

/**
 * Builder for model SchemeFileLinks
 *
 * @see SchemeFileLinks
 */
class SchemeFileLinksBuilder
{
    /**
     * @var SchemeFileLinks
     */
    private $instance;

    private function __construct(SchemeFileLinks $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new scheme file links Builder object.
     */
    public static function init(SchemeFileLink $self): self
    {
        return new self(new SchemeFileLinks($self));
    }

    /**
     * Initializes a new scheme file links object.
     */
    public function build(): SchemeFileLinks
    {
        return CoreHelper::clone($this->instance);
    }
}
