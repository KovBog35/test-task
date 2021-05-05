<?php

declare(strict_types=1);

namespace App\Exceptions\Company;

use App\Exceptions\BaseException;

class CompanyNotFoundException extends BaseException
{
    public function __construct($message = 'Company not found', $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
