<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('config_app')->insert(
            [
                'field' => 'app_name',
                'value' => 'Mobster'
            ]
        );
        \DB::table('config_app')->insert(
            [
                'field' => 'title',
                'value' => 'Manage your Finance easier'
            ]
        );
        \DB::table('config_app')->insert(
            [
                'field' => 'description',
                'value' => 'Mobster has features to view and manage our finances, such as transfer, and statistics.'
            ]
        );
    }
}
