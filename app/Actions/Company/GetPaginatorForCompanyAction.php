<?php

declare(strict_types=1);

namespace App\Actions\Company;

use App\Repositories\CompanyRepository;

final class GetPaginatorForCompanyAction
{
    private CompanyRepository $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function execute(GetPaginatorForCompanyRequest $request): GetPaginatorForCompanyResponse
    {
        $companies = $this->companyRepository->getCompaniesPaginator($request->getPage());

        return new GetPaginatorForCompanyResponse($companies);
    }
}
