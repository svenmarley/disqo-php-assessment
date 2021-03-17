<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::truncate();

        $faker = \Faker\Factory::create();

        for( $i = 0; $i < 10; $i++ ) {
            Note::create( [
                'title' => $faker->text( 50),
                'note' => $faker->paragraph(),
                'user_id' => ( $i % 5 ) + 1
            ]);
        }
    }
}
