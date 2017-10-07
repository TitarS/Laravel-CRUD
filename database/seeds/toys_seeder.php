<?php

use Illuminate\Database\Seeder;

class toys_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toys')->delete();

        $toys = array(
            array(
                'title' => 'Toy 1',
                'content' => 'lorem ipsum'
            ),
            array(
                'title' => 'Toys 2',
                'content' => 'laravel'
            ),
            array(
                'title' => 'Post4',
                'content' => 'phpstorm'
            ),
            array(
                'title' => 'Post5',
                'content' => 'LaravelCollective'
            ),
            array(
                'title' => 'Post6',
                'content' => 'Artisan'
            ),
            array(
                'title' => 'Post7',
                'content' => 'Seeder'
            ),
            array(
                'title' => 'Post8',
                'content' => 'Migration'
            )
        );
        DB::table('toys')->insert($toys);
    }
}
