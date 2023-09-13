<?php

    namespace App\Http\Controllers\Holidays;

    use App\DTO\Holidays\HolidaysWithDetailsDTO;
    use App\Http\Controllers\Controller;
    use App\Models\Holidays;

    class HolidaysShowController extends Controller
    {

        /**
         * @OA\Get(
         *     path="/api/holidays/{id}",
         *     @OA\Response(response="200", description="An example endpoint",
         *            @OA\JsonContent(
         *           @OA\Property(property="data",type="array",description="List of
         *                                                                       users",@OA\Items(ref="#/components/schemas/HolidaySchema"))
         *       )
         * )
         * )
         */
        public function __invoke(string $id)
        {
            $holidayData = Holidays::find($id);
            $holiday = HolidaysWithDetailsDTO::from($holidayData);

            return $holiday;
        }
    }
