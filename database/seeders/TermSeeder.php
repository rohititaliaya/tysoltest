<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Term;
class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::insert([
            [
                'id' => 1,
                'name' => 'Term 1',
            ],
            [
                'id' => 2,
                'name' => 'Term 2',
            ],
            [
                'id' => 3,
                'name' => 'Term 3',
            ],
            [
                'id' => 4,
                'name' => 'Term 4',
            ],
            [
                'id' => 5,
                'name' => 'Term 5',
            ],
        ]);
    }
}
