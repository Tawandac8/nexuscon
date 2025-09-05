<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tawanda = User::create([
            'name' => 'Tawanda',
            'email' => 'tawandachibayiwa@gmail.com',
            'password' => Hash::make('ch1b@y1w@')
        ]);

        $nexus = User::create([
            'name' => 'Nexus',
            'email' => 'sales@nexuscontech.co.zw',
            'password' => Hash::make('nexuscon@123')
        ]);
    }
}
