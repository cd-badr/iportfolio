<?php

namespace Database\Seeders;

use App\Models\home;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        home::insert([
            [
                "name" => "Badreddine Faras",
                "age" => "21",
                "birthday"=> "08-03-2003",
                "website"=> "www.badrfaras.live",
                "phone"=> "0607308015",
                "city"=> "casablanca",
                "degree" => "none",
                "email"=> "badirov.faras@gmail.com",
                "freelance"=> true,
                "created_at"=> Carbon::now()
            ],
            

            ]);
    }
}
