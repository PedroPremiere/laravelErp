<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

/**
 * @OA\Schema(schema="UserSchema",
 *               @OA\Property(
 *                  property="id",
 *                  description="User identifier",
 *                  type="integer",
 *                  nullable="false",
 *                  example="1"
 *                  ),
 *                @OA\Property(
 *                    property="name",
 *                    description="User name",
 *                    type="string",
 *                    nullable="false",
 *                    example="Gustav Bergren"
 *                ),
 *                @OA\Property(
 *                     property="email",
 *                     description="User email",
 *                     type="string",
 *                     nullable="false",
 *                     example="user@example.com"
 *                 ),
 *                 @OA\Property(
 *                      property="$created_at",
 *                      description="User creation date",
 *                      type="string",
 *                      nullable="false",
 *                      example="2023-09-10 15:57:08"
 *                  ),
 *                  @OA\Property(
 *                       property="updated_at",
 *                       description="User last update date",
 *                       type="string",
 *                       nullable="false",
 *                       example="2023-09-10 15:57:08"
 *                   ),
 * )
 */

final class UserDTO  extends Data
{
    public string $name;
    public string $email;
    public string $id;
    public string $created_at;
    public string $updated_at;




    public function __construct(string $name, string $email,int $id,string $created_at, string $updated_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;

    }
}
