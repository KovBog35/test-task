<?php

declare(strict_types=1);

namespace App\Actions\Company;

use App\Repositories\CompanyRepository;

final class UpdateCompanyByIdAction
{
    private CompanyRepository $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function execute(UpdateCompanyByIdRequest $request): void
    {
        $company = $this->companyRepository->getById($request->getId());

        $company->name = $request->getName();
        $company->email = $request->getEmail();
        $company->logo = $request->getLogo()->store('logos', 'public');
        $company->website = $request->getWebsite();

        $this->companyRepository->update($company);
    }
}
