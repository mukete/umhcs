<?php

class RacesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('races')->delete();

        $races = array(
            array(
                'id' => 1,
                'name' => 'American Indian or Alaskan Native',
            ),
            array(
                'id' => 2,
                'name' => 'Asian',
            ),
            array(
                'id' => 3,
                'name' => 'Black or African American',
            ),
            array(
                'id' => 4,
                'name' => 'Native Hawaiian or Other Pacific Islander',
            ),
            array(
                'id' => 5,
                'name' => 'Causcasian / Hispanic / Latino',
            ),
            array(
                'id' => 6,
                'name' => 'Not Hispanic / Not Latino',
            ),
            array(
                'id' => 7,
                'name' => 'Hispanic / Latino',
            ),
        );

        DB::table('races')->insert($races);
    }
}
