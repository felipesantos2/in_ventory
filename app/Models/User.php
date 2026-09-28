<?php

declare(strict_types=1);

namespace App\Models;

use App\Entities\UserEntity;

class User extends Model
{
    protected $table = 'users';
    
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'name', 
        'email'
    ];

    protected $attributes = [
        'name'       => null, // Represents a username
        'email'      => null,
    ];
    
    protected $returnType = UserEntity::class;
}
