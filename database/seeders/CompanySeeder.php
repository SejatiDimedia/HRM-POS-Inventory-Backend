<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a company
        \App\Models\Company::create([
            'name' => 'SejatiDimedia',
            'email' => 'timurdev@sejatidimedia.com',
            'phone' => '08123456789',
            'website' => 'https://sejatidimedia.com',
            'logo' => 'https://sejatidimedia.com/logo.png',
            'address' => 'Jl. Sejati No. 1',
            'status' => 'active',
            'total_users' => 10,
            'clock_in_time' => '09:00:00',
            'clock_out_time' => '18:00:00',
            'early_clock_in_time' => 15,
            'allow_clock_out_till' => 15,
            'self_clocking' => 1,
        ]);
    }
}
