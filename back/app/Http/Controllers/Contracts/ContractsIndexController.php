<?php

namespace App\Http\Controllers\Contracts;

use App\DTO\ContractsDTO;
use App\Models\Contracts;
use App\Http\Controllers\Controller;

class ContractsIndexController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/contracts",
     *     @OA\Response(response="200", description="An example endpoint",
     *       @OA\JsonContent(
     *          @OA\Property(property="data",type="array",description="List of
     *                                                                      users",@OA\Items(ref="#/components/schemas/ContractSchema"))
     *      )
     * ))
     */

    public function __invoke()
    {
        $contracts = ContractsDTO::collection(Contracts::all());

        return $contracts;
    }
}
