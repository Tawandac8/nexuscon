<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Solar Panels',
            'Inverters',
            'Batteries',
            'Charge Controllers',
            'Mounting Systems',
            'Cables and Connectors',
            'Monitoring Systems',
            'Accessories',
            'Solar Kits',
            'Solar Water Pumps',
            'Solar Lights',
            'PPE',
            'Tools',
            'Safety Equipment',
            'Installation Services',
            'Maintenance Services',
            'Consultation Services',
            'Sockets and Switches',
            'Solar Water Heaters',
            'Piping and Plumbing',
            'Electrical Components',
            'Renewable Energy Solutions',
            'Energy Storage Solutions',
            'Smart Home Devices',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create(['name' => $category]);
        }
    }
}
