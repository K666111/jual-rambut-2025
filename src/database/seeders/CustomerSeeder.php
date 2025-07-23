<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Syauqi Rifki',
            'email' => 'syauqi@example.com',
            'phone' => '081234567890',
            'address' => 'Jl. Contoh No. 123',
        ]);
        
    }
}
