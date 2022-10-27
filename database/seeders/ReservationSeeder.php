<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservatio = new Reservation();
        $reservatio->id_client = "1";
                //Example -> 2006-01-20
        $reservatio->date_reservation = "2022-10-26";
        $reservatio->room_type = "2 beds";
        $reservatio->save();
    }
}
