<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  Class Company
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $logo
 * @property string $website
 */
class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

}
