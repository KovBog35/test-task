<?php

declare(strict_types=1);

namespace App\Actions\Staff;

use App\Models\Staff;
use App\Repositories\CompanyRepository;
use App\Repositories\StaffRepository;

final class CreateStaffByIdAction
{
    private StaffRepository $staffRepository;
    private CompanyRepository $companyRepository;

    public function __construct(
        StaffRepository $staffRepository,
        CompanyRepository $companyRepository
    ) {
        $this->staffRepository = $staffRepository;
        $this->companyRepository = $companyRepository;
    }

    public function execute(CreateStaffByIdRequest $request): void
    {
        $company = $this->companyRepository->getByName($request->getCompanyName());

        $newStaff = new Staff();

        $newStaff->first_name = $request->getFirstName();
        $newStaff->last_name = $request->getLastName();
        $newStaff->company_id = $company->getId();
        $newStaff->email = $request->getEmail();
        $newStaff->phone = $request->getPhone();

        $this->staffRepository->save($newStaff);
    }
}
