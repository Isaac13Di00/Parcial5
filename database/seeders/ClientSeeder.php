<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->name = "Isaac";
        $client->phone_number = "667100000";
        $client->email = "iperez_19@alu.uabcs";
        $client->save();

        $client = new Client();
        $client->name = "Angel";
        $client->phone_number = "612000000";
        $client->email = "asolis_19@alu.uabcs";
        $client->save();
        
    }
}
