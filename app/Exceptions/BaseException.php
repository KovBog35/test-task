<?php

declare(strict_types=1);

namespace App\Exceptions;

use Throwable;
use DomainException;

abstract class BaseException extends DomainException
{
}
