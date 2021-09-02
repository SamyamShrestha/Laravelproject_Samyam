<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0 ; $i < 5 ; $i++)
        {
        DB::table('registers')->insert([
            'id' => $i + 1,
            'fullName' => Str::random(10),
            'address' => Str::random(7) . '@gmail.com',
            'password' => Hash::make(11),
            'vpassword'=> Hash::make(11),
            'picfile' => 'storage/images/' .Str::random(4) . 'jpeg',
            'created_at' => '2021-09-02',
            'updated_at' => '2021-09-02'
        ]);
        }
    }
}
