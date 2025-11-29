<?php

namespace App\Models;

use App\Enums\UserRole;

class User
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
        public UserRole $role
    ) {}
}
