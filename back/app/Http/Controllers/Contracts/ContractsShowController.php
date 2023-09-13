<?php

    namespace App\Http\Controllers\Contracts;

    use App\Models\Contracts;
    use App\DTO\Contracts\ContractWithDetailsDTO;
    use App\Http\Controllers\Controller;

    class ContractsShowController extends Controller
    {

        /**
         * @OA\Get(
         *     path="/api/contracts/{id}",
         *     @OA\Response(response="200", description="An example endpoint",
         *       @OA\JsonContent(
         *          @OA\Property(property="data",type="array",description="List of
         *                                                                      users",@OA\Items(ref="#/components/schemas/ContractSchema"))
         *      )
         * ))
         */
        public function __invoke(string $id)
        {
            $contractData = Contracts::find($id);
            $contract = ContractWithDetailsDTO::from($contractData);

            return $contract;
        }
    }
