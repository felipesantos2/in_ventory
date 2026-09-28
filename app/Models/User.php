<?php

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
    
    protected $returnType = UserEntity::class;
}
