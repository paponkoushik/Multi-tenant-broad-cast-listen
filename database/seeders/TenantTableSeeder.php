<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant1 = Tenant::query()->create([
            'key' => 't_1',
            'tenancy_db_name' => config('tenancy.database.prefix') . uniqid()
            ]);
        $tenant1->domains()->create(['domain' => $tenant1->key . '.' . $this->urlToStr(config('app.url'))]);
    }

    public function urlToStr($url)
    {
        return preg_replace('#^[^:/.]*[:/]+#i', '', preg_replace('{/$}', '', config('app.url')));
    }
}
