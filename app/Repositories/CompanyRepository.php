<?php

namespace App\Repositories;

use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;

class CompanyRepository
{
    public const DEFAULT_PER_PAGE = 10;
    public function save(Company $company): Company
    {
        $company->save();

        return $company;
    }

    public function update(Company $company): Company
    {
        $company->update();

        return $company;
    }

    public function delete(Company $company): bool
    {
        return $company->delete();
    }

    public function getById(int $companyId): ?Company
    {
        return Company::firstWhere('id', $companyId);
    }

    public function getCompaniesPaginator(int $page): LengthAwarePaginator
    {
        return Company::query()->paginate(self::DEFAULT_PER_PAGE, ['*'], 'page', $page);
    }
}
