<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Nnjeim\World\Actions\SeedAction;
use Illuminate\Support\Facades\Schema;

class WorldSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call([
            SeedAction::class,
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
