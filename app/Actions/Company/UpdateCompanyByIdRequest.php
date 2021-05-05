<?php

declare(strict_types=1);

namespace App\Actions\Company;

final class UpdateCompanyByIdRequest
{
    private int $id;
    private string $name;
    private string $email;
    private ?string $logo;
    private ?string $website;

    public function __construct(
        int $id,
        string $name,
        string $email,
        ?string $logo,
        ?string $website
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->logo = $logo;
        $this->website = $website;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }
}
