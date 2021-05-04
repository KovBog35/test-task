<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 *  Class Staff
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $company_id
 * @property string $email
 * @property string $phone
 */
class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'company_id',
        'email',
        'phone',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function getCompanyId(): int
    {
        return $this->company_id;
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
