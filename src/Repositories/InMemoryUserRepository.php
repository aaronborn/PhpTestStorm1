<?php

namespace App\Repositories;

use App\Models\User;
use App\Enums\UserRole;

class InMemoryUserRepository implements UserRepositoryInterface
{
    /** @var User[] */
    private array $users;

    public function __construct()
    {
        $this->users = [
            new User(1, "Alice", "alice@example.com", UserRole::Admin),
            new User(2, "Bob", "bob@example.com", UserRole::Editor),
            new User(3, "Charlie", "charlie@example.com", UserRole::Viewer)
        ];
    }

    public function all(): array
    {
        return $this->users;
    }

    public function find(int $id): ?User
    {
        return $this->users[$id - 1] ?? null;
    }
}
