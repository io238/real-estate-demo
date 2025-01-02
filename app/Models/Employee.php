<?php

namespace App\Models;

use App\Enums\UserType;

class Employee extends User
{
    // Since the Employee model extends the User model, it will also use the users table.
    protected $table = 'users';

    protected $attributes = [
        'type' => UserType::EMPLOYEE,
    ];

    protected static function boot()
    {
        parent::boot();

        // Filter the users table to only include employees.
        static::addGlobalScope('employee', function ($builder) {
            $builder->where('type', UserType::EMPLOYEE);
        });
    }

    // Relationships

    public function legalEntitiy()
    {
        return $this->belongsToMany(LegalEntity::class, 'legal_entity_user', 'user_id', 'legal_entity_id');
    }
}
