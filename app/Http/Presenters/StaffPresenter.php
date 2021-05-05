<?php

namespace App\Http\Presenters;

use App\Models\Staff;
use Illuminate\Pagination\LengthAwarePaginator;

class StaffPresenter
{
    private CompanyPresenter $companyPresenter;

    public function __construct(CompanyPresenter $companyPresenter)
    {
        $this->companyPresenter = $companyPresenter;
    }

    public function present(Staff $staff): array
    {
        (array) $arrayStaff = [
            'id' => $staff->getId(),
            'firstName' => $staff->getFirstName(),
            'lastName' => $staff->getLastName(),
            'company' => $this->companyPresenter->present($staff->company),
            'email' => $staff->getEmail(),
            'phone' => $staff->getPhone(),
        ];
        return $arrayStaff;
    }

    public function presentCollection(LengthAwarePaginator $collection): array
    {
        return $collection
            ->map(
                function (Staff $staff) {
                    return $this->present($staff);
                }
            )
            ->all();
    }
}
