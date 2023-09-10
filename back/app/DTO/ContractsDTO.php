<?php


namespace App\DTO;

use Spatie\LaravelData\Data;

/**
 * @OA\Schema(schema="ContractSchema",
 *               @OA\Property(
 *                  property="id",
 *                  description="Contract identifier",
 *                  type="integer",
 *                  nullable="false",
 *                  example="1"
 *                  ),
 *                @OA\Property(
 *                    property="position",
 *                    description="Position name",
 *                    type="string",
 *                    nullable="false",
 *                    example="driver"
 *                ),
 *                @OA\Property(
 *                     property="salary",
 *                     description="salary in USD",
 *                     type="integer",
 *                     nullable="false",
 *                     example="6"
 *                 ),
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
 *                       property="holidays_per_year",
 *                       description="Number of holidays per year",
 *                       type="integer",
 *                       nullable="false",
 *                       example="20"
 *                   ),
 *                  @OA\Property(
 *                       property="updated_at",
 *                       description="User last update date",
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
 * )
 */

final class ContractsDTO  extends Data
{
    public string $id;
    public int $salary;
    public string $position;
    public string $start_date;
    public string $end_date;
    public string $holidays_per_year;
    public string $created_at;
    public string $updated_at;




    public function __construct(
        int $id,int $salary, string $position,
        string $start_date, string $end_date,
        int $holidays_per_year,
        string $created_at, string $updated_at)
    {
        $this->id = $id;
        $this->salary = $salary;
        $this->position = $position;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->holidays_per_year = $holidays_per_year;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;

    }
}

