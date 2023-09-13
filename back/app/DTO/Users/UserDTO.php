<?php

    namespace App\DTO\Users;

    use Spatie\LaravelData\Data;

    /**
     * @OA\Schema(schema="UserSchema",
     *               @OA\Property(
     *                  property="id",
     *                  description="Users identifier",
     *                  type="integer",
     *                  nullable="false",
     *                  example="1"
     *                  ),
     *                @OA\Property(
     *                    property="name",
     *                    description="Users name",
     *                    type="string",
     *                    nullable="false",
     *                    example="Gustav Bergren"
     *                ),
     *                @OA\Property(
     *                     property="email",
     *                     description="Users email",
     *                     type="string",
     *                     nullable="false",
     *                     example="user@example.com"
     *                 ),
     *                 @OA\Property(
     *                      property="$created_at",
     *                      description="Users creation date",
     *                      type="string",
     *                      nullable="false",
     *                      example="2023-09-10 15:57:08"
     *                  ),
     *                  @OA\Property(
     *                       property="updated_at",
     *                       description="Users last update date",
     *                       type="string",
     *                       nullable="false",
     *                       example="2023-09-10 15:57:08"
     *                   ),
     * )
     */
    final class UserDTO extends Data
    {
        /**
         * @param  string  $name
         * @param  string  $email
         * @param  int     $id
         * @param  string  $created_at
         * @param  string  $updated_at
         */
        public function __construct(
            public string $name,
            public string $email,
            public int $id,
            public string $created_at,
            public string $updated_at
        )
        {

        }
    }
