<?php

declare(strict_types=1);

namespace App\Actions\Staff;

final class UpdateStaffByIdRequest
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $companyName;
    private string $email;
    private string $phone;

    public function __construct(
        int $id,
        string $firstName,
        string $lastName,
        string $companyName,
        string $email,
        string $phone
    ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->companyName = $companyName;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}
