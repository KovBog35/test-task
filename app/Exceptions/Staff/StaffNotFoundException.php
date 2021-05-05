<?php

declare(strict_types=1);

namespace App\Exceptions\Staff;

use App\Exceptions\BaseException;

class StaffNotFoundException extends BaseException
{
    public function __construct($message = 'Company not found', $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
