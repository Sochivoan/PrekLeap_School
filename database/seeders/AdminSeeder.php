<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::insert([
            [
                'name' => 'Administrator',
                'email' => 'supper@gmail.com',
                'password' =>bcrypt('87654321'),
                'created_at'=>\Carbon\Carbon::now('Asia/Phnom_Penh')
            ],
        ]);
    }
}
