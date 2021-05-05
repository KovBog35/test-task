<?php

declare(strict_types=1);

namespace App\Actions\Company;

use App\Repositories\CompanyRepository;
use App\Exceptions\Company\CompanyNotFoundException;

final class GetCompanyByIdAction
{
    private CompanyRepository $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function execute(GetCompanyByIdRequest $request): GetCompanyByIdResponse
    {
        $company = $this->companyRepository->getById($request->getId());

        if (!$company) {
            throw new CompanyNotFoundException();
        }

        return new GetCompanyByIdResponse($company);
    }
}
