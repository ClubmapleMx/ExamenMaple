<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // DB::table('books')->insert([
        //         'title' => 'Hermosas criaturas',
        //         'category' => 'Fantasia',
        //         'author' =>  'Milla jovovic',
        //         'realease_date' => date('d:m:y'),
        //         'publish_date' => date('d:m:y'),
        //         'created_at' => date('d:m:y'),
        // ]);
    

        Books::factory()->count(2000)->create();
    }
}
