<?php


namespace App\DTO\Holidays;

use Spatie\LaravelData\Data;

/**
 * @OA\Schema(schema="HolidaySchema",
 *               @OA\Property(
 *                  property="id",
 *                  description="Contract identifier",
 *                  type="integer",
 *                  nullable="false",
 *                  example="1"
 *                  ),
 *                  @OA\Property(
 *                       property="start_date",
 *                       description="Contract start date",
 *                       type="string",
 *                       nullable="false",
 *                       example="2023-09-10 15:57:08"
 *                   ),
 *                 @OA\Property(
 *                      property="end_date",
 *                      description="Contract end date",
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
 *                   @OA\Property(
 *                        property="created_at",
 *                        description="Contract creation date",
 *                        type="string",
 *                        nullable="false",
 *                        example="2023-09-10 15:57:08"
 *                    ),
 *                    @OA\Property(
 *                          property="contracts_id",
 *                          description="Contract identifier",
 *                          type="integer",
 *                          nullable="false",
 *                          example="1"
 *                   ),
 * )
 */
final class HolidaysDTO extends Data
{
    public string $id;
    public string $start_date;
    public string $end_date;
    public string $created_at;
    public string $updated_at;
    public string $contracts_id;


    public function __construct(
        int    $id,
        string $start_date,
        string $end_date,
        string $created_at,
        string $updated_at,
        string $contracts_id
    ) {
        $this->id = $id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->contracts_id = $contracts_id;
    }
}
