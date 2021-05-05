<?php

declare(strict_types=1);

namespace App\Actions\Company;

final class GetPaginatorForCompanyRequest
{
    private int $page;

    public function __construct(int $page)
    {
        $this->page = $page;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
