<?php

namespace Tests\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use Spatie\ModelInfo\ModelInfo;


class TruncateService{
    static function truncate(): void
    {
        Schema::disableForeignKeyConstraints();

        $models = ModelInfo::forAllModels();

        foreach ($models as $model){
            $tableName = $model->tableName;

            DB::table($tableName)->truncate();
        }

        Schema::enableForeignKeyConstraints();
    }
}


