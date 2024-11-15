<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BranchIdentification;
use Form3PublicAPILib\Models\BranchIdentificationRequest;

/**
 * Builder for model BranchIdentificationRequest
 *
 * @see BranchIdentificationRequest
 */
class BranchIdentificationRequestBuilder
{
    /**
     * @var BranchIdentificationRequest
     */
    private $instance;

    private function __construct(BranchIdentificationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new branch identification request Builder object.
     */
    public static function init(BranchIdentification $data): self
    {
        return new self(new BranchIdentificationRequest($data));
    }

    /**
     * Initializes a new branch identification request object.
     */
    public function build(): BranchIdentificationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
