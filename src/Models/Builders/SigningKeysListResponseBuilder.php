<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\SigningKeysListResponse;

/**
 * Builder for model SigningKeysListResponse
 *
 * @see SigningKeysListResponse
 */
class SigningKeysListResponseBuilder
{
    /**
     * @var SigningKeysListResponse
     */
    private $instance;

    private function __construct(SigningKeysListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new signing keys list response Builder object.
     */
    public static function init(array $data): self
    {
        return new self(new SigningKeysListResponse($data));
    }

    /**
     * Initializes a new signing keys list response object.
     */
    public function build(): SigningKeysListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}