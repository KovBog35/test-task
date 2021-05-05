<?php

namespace App\Http\Presenters;

use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;

class CompanyPresenter
{
    public function present(Company $company): array
    {
        (array) $arrayCompany = [
            'id' => $company->getId(),
            'name' => $company->getName(),
            'email' => $company->getEmail(),
            'logo' => $company->getLogo(),
            'website' => $company->getWebsite(),
        ];
        return $arrayCompany;
    }

    public function presentCollection(LengthAwarePaginator $collection): array
    {
        return $collection
            ->map(
                function (Company $company) {
                    return $this->present($company);
                }
            )
            ->all();
    }
}
