<?php

namespace App\Controllers;

use App\Services\UserService;

class UserController
{
    public function __construct(
        private UserService $users
    ) {}

    public function list(): void
    {
        $data = $this->users->getAllUsers();
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    public function show(int $id): void
    {
        $user = $this->users->getUser($id);
        echo $user
            ? json_encode($user, JSON_PRETTY_PRINT)
            : json_encode(["error" => "User not found"]);
    }
}
