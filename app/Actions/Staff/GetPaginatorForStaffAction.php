<?php

declare(strict_types=1);

namespace App\Actions\Staff;

use App\Repositories\StaffRepository;

final class GetPaginatorForStaffAction
{
    private StaffRepository $staffRepository;

    public function __construct(StaffRepository $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }

    public function execute(GetPaginatorForStaffRequest $request): GetPaginatorForStaffResponse
    {
        $staff = $this->staffRepository->getStaffPaginator($request->getPage());

        return new GetPaginatorForStaffResponse($staff);
    }
}
