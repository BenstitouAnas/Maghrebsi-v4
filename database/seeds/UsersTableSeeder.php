<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        static $password;
        $faker->locale = 'fr_FR';

        foreach (range(1,10) as $index) {
            DB::table('utilisateurpros')->insert([
                'nom' => $faker->firstName,
                'prenom' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => $password ?: $password = bcrypt('secret'),
                'tel' => $faker->tollFreePhoneNumber,
                'adresse' => $faker->address,
                'compagnie' => $faker->word,
                'identifiantLegale' => $faker->word,
                'statusEntreprise' => $faker->randomElement(['AutoEntrep','Entrepronneur']),
                'valeurTVA' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
                'soldeHT' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
                'role_id' => $faker->numberBetween($min = 0, $max = 5),
                'typeUser' => $faker->randomElement([0, 1, 2]),
                'updated_at' => $faker->dateTime($max = 'now'),
                'created_at' => $faker->dateTime($max = 'now')
            ]);
      }
    }
}
