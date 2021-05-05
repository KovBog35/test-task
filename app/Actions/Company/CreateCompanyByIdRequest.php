<?php

declare(strict_types=1);

namespace App\Actions\Company;

use Illuminate\Http\UploadedFile;

final class CreateCompanyByIdRequest
{
    private string $name;
    private string $email;
    private ?UploadedFile $logo;
    private ?string $website;

    public function __construct(
        string $name,
        string $email,
        ?UploadedFile $logo,
        ?string $website
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->logo = $logo;
        $this->website = $website;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getLogo(): ?UploadedFile
    {
        return $this->logo;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }
}
