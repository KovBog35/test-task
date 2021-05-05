<?php

declare(strict_types=1);

namespace App\Actions\Staff;

use App\Models\Staff;

final class GetStaffIdResponse
{
    private Staff $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function getResponse(): Staff
    {
        return $this->staff;
    }
}
