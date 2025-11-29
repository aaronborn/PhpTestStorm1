<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface
{
    /** @return User[] */
    public function all(): array;

    public function find(int $id): ?User;
}
