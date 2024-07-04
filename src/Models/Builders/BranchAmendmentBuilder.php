<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\BranchAmendment;
use Form3PublicAPILib\Models\BranchUpdate;

/**
 * Builder for model BranchAmendment
 *
 * @see BranchAmendment
 */
class BranchAmendmentBuilder
{
    /**
     * @var BranchAmendment
     */
    private $instance;

    private function __construct(BranchAmendment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new branch amendment Builder object.
     */
    public static function init(): self
    {
        return new self(new BranchAmendment());
    }

    /**
     * Sets data field.
     */
    public function data(?BranchUpdate $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new branch amendment object.
     */
    public function build(): BranchAmendment
    {
        return CoreHelper::clone($this->instance);
    }
}
