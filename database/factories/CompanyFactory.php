<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->companyEmail,
            'logo' => rand(0,1) ? $this->faker->imageUrl(100,100) : null,
            'website' => rand(0,1) ? $this->faker->domainName : null,
        ];
    }
}
