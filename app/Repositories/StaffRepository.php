<?php

namespace App\Repositories;

use App\Models\Staff;
use Illuminate\Pagination\LengthAwarePaginator;

class StaffRepository
{
    public const DEFAULT_PER_PAGE = 10;

    public function save(Staff $staff): Staff
    {
        $staff->save();

        return $staff;
    }

    public function update(Staff $staff): Staff
    {
        $staff->update();

        return $staff;
    }

    public function delete(Staff $staff): bool
    {
        return $staff->delete();
    }

    public function getById(int $staffId): ?Staff
    {
        return Staff::firstWhere('id', $staffId);
    }

    public function getStaffPaginator(int $page): LengthAwarePaginator
    {
        return Staff::query()->paginate(self::DEFAULT_PER_PAGE, ['*'], 'page', $page);
    }
}
