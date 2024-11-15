<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\ReportUser;

/**
 * Builder for model ReportUser
 *
 * @see ReportUser
 */
class ReportUserBuilder
{
    /**
     * @var ReportUser
     */
    private $instance;

    private function __construct(ReportUser $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new report user Builder object.
     */
    public static function init(): self
    {
        return new self(new ReportUser());
    }

    /**
     * Sets user id field.
     */
    public function userId(?string $value): self
    {
        $this->instance->setUserId($value);
        return $this;
    }

    /**
     * Sets user id code field.
     */
    public function userIdCode(?string $value): self
    {
        $this->instance->setUserIdCode($value);
        return $this;
    }

    /**
     * Initializes a new report user object.
     */
    public function build(): ReportUser
    {
        return CoreHelper::clone($this->instance);
    }
}
