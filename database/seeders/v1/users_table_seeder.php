<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User as UserModel;

class users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hashed_password = Hash::make("administrator");
        $base_controller = new Controller;

        UserModel::updateOrCreate(
            ['email' => 'admin@test.com'],
            [
                'slack' => $base_controller->generate_slack("users"),
                'user_code' => 'SA',
                'fullname' => "test Admin",
                'email' => 'admin@test.com',
                'password' => $hashed_password,
                'phone' => '0000000000',
                'role_id' => 1, 
                'status' => 1
            ]
        )->save();
    }
}
