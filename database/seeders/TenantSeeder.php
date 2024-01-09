<?php

namespace Database\Seeders;

use Database\Seeders\tenant\UserSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantSeeder extends Seeder
{
    private $tables = [
        'users'
    ];

    public function run()
    {

        $this->cleanDatabase();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([
            UserSeeder::class
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $tableName) {
            DB::table($tableName)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
