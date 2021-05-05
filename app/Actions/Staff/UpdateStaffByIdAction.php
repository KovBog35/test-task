<?php

declare(strict_types=1);

namespace App\Actions\Staff;

use App\Repositories\StaffRepository;
use App\Repositories\CompanyRepository;

final class UpdateStaffByIdAction
{
    private StaffRepository $staffRepository;
    private CompanyRepository $companyRepository;

    public function __construct(
        StaffRepository $staffRepository,
        CompanyRepository $companyRepository
    )
    {
        $this->staffRepository = $staffRepository;
        $this->companyRepository = $companyRepository;
    }

    public function execute(UpdateStaffByIdRequest $request): void
    {
        $company = $this->companyRepository->getByName($request->getCompanyName());

        $staff = $this->staffRepository->getById($request->getId());

        $staff->first_name = $request->getFirstName();
        $staff->last_name = $request->getLastName();
        $staff->company_id = $company->getId();
        $staff->email = $request->getEmail();
        $staff->phone = $request->getPhone();

        $this->staffRepository->update($staff);
    }
}
