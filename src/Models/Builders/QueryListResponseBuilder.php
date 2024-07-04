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
use Form3PublicAPILib\Models\QueryListResponse;

/**
 * Builder for model QueryListResponse
 *
 * @see QueryListResponse
 */
class QueryListResponseBuilder
{
    /**
     * @var QueryListResponse
     */
    private $instance;

    private function __construct(QueryListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new query list response Builder object.
     */
    public static function init(array $data, Links $links): self
    {
        return new self(new QueryListResponse($data, $links));
    }

    /**
     * Initializes a new query list response object.
     */
    public function build(): QueryListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
