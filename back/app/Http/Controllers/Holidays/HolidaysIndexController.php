<?php

namespace App\Http\Controllers\Holidays;

use App\DTO\HolidaysDTO;
use App\Models\Holidays;
use App\Http\Controllers\Controller;

class HolidaysIndexController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/holidays",
     *     @OA\Response(response="200", description="An example endpoint",
     *            @OA\JsonContent(
     *           @OA\Property(property="data",type="array",description="List of
     *                                                                       users",@OA\Items(ref="#/components/schemas/HolidaySchema"))
     *       )
     * )
     * )
     */
    public function __invoke()
    {
        $holidays = HolidaysDTO::collection(Holidays::all());

        return $holidays;
    }
}
