<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Userpost;
use Illuminate\Support\Facades\DB;

class UserpostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userposts')->insert([
            'id' => '99',
            'civilite' => 'M',
            'name' => 'Jean',
            'lastname' => 'Delafontaine',
            'datenaissance' => '1992-12-08',
            'paysresidence' => 'France',
            'nationalite' => 'Français',
            'phone' => '+33 3 33 33 33 33',
            'email' => 'jean.delafontaine@gmail.com',
            'created_at' => '2023-02-10 10:00:00',
            'updated_at' => '2023-02-10 10:00:00',
            'offres_id' => '99',
        ]);
    }
}
