<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Offre;

class OffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offres')->insert([
            'id' => '99',
            'reference_offre' => '45avecz487',
            'titre' => 'Developpeur front-end',
            'date_emission' => '2023-02-08',
            'date_echeance' => '2023-02-08',
            'contrat' => 'CDI',
            'fonction' => 'Développement',
            'pays' => 'Sénégal',
            'description_poste' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit et, porttitor magna integer lacus enim litora hendrerit, tempus risus porta rutrum aliquet posuere sollicitudin. Mollis habitant iaculis orci rutrum vitae sodales molestie cum inceptos penatibus duis potenti per phasellus, massa augue fames quam nullam etiam porttitor vestibulum ultrices faucibus magnis ut diam. Etiam malesuada fringilla porttitor felis nostra orci integer quis volutpat rhoncus, montes nec per sem nam nascetur himenaeos faucibus molestie, pellentesque iaculis mollis pretium ridiculus augue mus laoreet sociosqu.  Integer vehicula nam diam mus ligula ultrices auctor, malesuada semper primis tincidunt hendrerit gravida phasellus fusce, erat nunc mollis euismod habitant suspendisse. Vivamus cubilia sagittis fames neque non orci volutpat, hendrerit urna dui pulvinar enim sodales, justo tempor nostra ac elementum morbi. Sodales justo velit curae conubia fusce auctor in non, habitant nunc lectus at per turpis orci.',
            'created_at' => '2023-02-10 16:11:43',
            'updated_at' => '2023-02-10 16:11:43',
        ]);
    }
}
