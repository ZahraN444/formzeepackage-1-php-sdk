<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use Form3PublicAPILib\Models\NewReportRequestReportUser;

/**
 * Builder for model NewReportRequestReportUser
 *
 * @see NewReportRequestReportUser
 */
class NewReportRequestReportUserBuilder
{
    /**
     * @var NewReportRequestReportUser
     */
    private $instance;

    private function __construct(NewReportRequestReportUser $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new new report request report user Builder object.
     */
    public static function init(string $userId, string $userIdCode): self
    {
        return new self(new NewReportRequestReportUser($userId, $userIdCode));
    }

    /**
     * Initializes a new new report request report user object.
     */
    public function build(): NewReportRequestReportUser
    {
        return CoreHelper::clone($this->instance);
    }
}
