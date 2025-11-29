<?php

namespace App\Services;

trait LoggerTrait
{
    public function log(string $message): void
    {
        echo "[LOG] $message\n";
    }
}
