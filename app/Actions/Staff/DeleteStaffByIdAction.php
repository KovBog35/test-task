<?php

declare(strict_types=1);

namespace App\Actions\Staff;

use App\Repositories\StaffRepository;
use App\Exceptions\Staff\StaffNotFoundException;

final class DeleteStaffByIdAction
{
    private StaffRepository $staffRepository;

    public function __construct(StaffRepository $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }

    public function execute(GetStaffByIdRequest $request): void
    {
        $staff = $this->staffRepository->getById($request->getId());

        if (!$staff) {
            throw new StaffNotFoundException();
        }

        $this->staffRepository->delete($staff);
    }
}
