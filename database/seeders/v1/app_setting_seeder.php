<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SettingApp as SettingAppModel;

class app_setting_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingAppModel::firstOrCreate(
            [
                'company_name' => 'test POS',
                'app_date_time_format' => 'd-m-Y H:i',
                'app_date_format' => 'd-m-Y',
                'company_logo' => '',
                'updated_by' => 1,
                'created_at' => now()
            ]
        )->save();
    }
}
