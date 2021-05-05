<?php

declare(strict_types=1);

namespace App\Actions\Company;

use App\Models\Company;
use App\Repositories\CompanyRepository;

final class CreateCompanyByIdAction
{
    private CompanyRepository $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function execute(CreateCompanyByIdRequest $request): void
    {
        $newCompany = new Company();

        $newCompany->name = $request->getName();
        $newCompany->email = $request->getEmail();
        $newCompany->logo = $request->getLogo()->store('logos', 'public');
        $newCompany->website = $request->getWebsite();

        $this->companyRepository->save($newCompany);
    }
}
