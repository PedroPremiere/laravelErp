<?php

    namespace App\Http\Controllers\Holidays;

    use App\DTO\Holidays\HolidaysDTO;
    use App\Http\Controllers\Controller;
    use App\Models\Holidays;

    class HolidaysIndexController extends Controller
    {

        /**
         * @OA\Get(
         *     path="/api/holidays/",
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
