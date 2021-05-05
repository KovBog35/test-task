<?php

declare(strict_types=1);

namespace App\Actions\Company;

use App\Models\Company;

final class GetCompanyByIdResponse
{
    private Company $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function getResponse(): Company
    {
        return $this->company;
    }
}
