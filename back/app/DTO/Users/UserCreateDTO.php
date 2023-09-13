<?php

    namespace App\DTO\Users;

    use Illuminate\Http\Request;
    use Spatie\LaravelData\Attributes\Validation\Required;
    use Spatie\LaravelData\Attributes\Validation\Same;
    use Spatie\LaravelData\Attributes\Validation\StringType;
    use Spatie\LaravelData\Data;

    final class UserCreateDTO extends Data
    {
        public function __construct(
            public string $name,
            public string $email,
            public string $password,
            public string $passwordConfirm,
        )
        {
        }

        public static function fromRequest(Request $request): self
        {
            $validatedData = $request->validate(
                self::rules()
            );

            return new self(
                $request->input('name'),
                $request->input('email'),
                $request->input('password'),
                $request->input('passwordConfirm')
            );
        }

        public static function rules(): array
        {
            //todo add password and password confirm the same
            return [
                'name' => [new Required(), new StringType()],
                'email' => [new Required(), new StringType()],
                'password' => [new Required(), new StringType()],
                'passwordConfirm' => [
                    new Required(),
                    new StringType(),
                    new Same('password')
                ],
            ];
        }

    }
