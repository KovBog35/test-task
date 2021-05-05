<?php

declare(strict_types=1);

namespace App\Actions\Company;

use Illuminate\Pagination\LengthAwarePaginator;

final class GetPaginatorForCompanyResponse
{
    private LengthAwarePaginator $companies;

    public function __construct(LengthAwarePaginator $companies)
    {
        $this->companies = $companies;
    }

    public function getResponse(): LengthAwarePaginator
    {
        return $this->companies;
    }
}
