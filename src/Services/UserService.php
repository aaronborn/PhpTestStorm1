<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use App\Models\User;

class UserService
{
    use LoggerTrait;

    public function __construct(
        private UserRepositoryInterface $repo
    ) {}

    /** @return User[] */
    public function getAllUsers(): array
    {
        $this->log("Fetching all users");
        return $this->repo->all();
    }

    public function getUser(int $id): ?User
    {
        $this->log("Looking up user ID: $id");
        return $this->repo->find($id);
    }
}
