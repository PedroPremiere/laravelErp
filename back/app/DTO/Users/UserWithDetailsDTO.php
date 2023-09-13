<?php

    namespace App\DTO\Users;

    use Spatie\LaravelData\Data;

    final class UserWithDetailsDTO extends Data
    {
        public function __construct(
            public string $name,
            public string $email,
            public int $id,
            public string $created_at,
            public string $updated_at,
        )
        {
        }
    }
