<?php

declare(strict_types=1);

namespace App\Actions\Staff;

use Illuminate\Pagination\LengthAwarePaginator;

final class GetPaginatorForStaffResponse
{
    private LengthAwarePaginator $staff;

    public function __construct(LengthAwarePaginator $staff)
    {
        $this->staff = $staff;
    }

    public function getResponse(): LengthAwarePaginator
    {
        return $this->staff;
    }
}
