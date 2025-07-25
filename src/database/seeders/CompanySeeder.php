<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'PT. Hairclip Indonesia',
            'logo' => '',
            'phone' => '085714306063',
            'address' => 'Jl. Samanhudi 123',
        ]);
        
    }
}
