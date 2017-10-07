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
                'content' => 'lorem ipsum',
                'image' => ''
            ),
            array(
                'title' => 'Toys 2',
                'content' => 'laravel',
                'image' => ''
            ),
            array(
                'title' => 'Post4',
                'content' => 'phpstorm',
                'image' => ''
            ),
            array(
                'title' => 'Post5',
                'content' => 'LaravelCollective',
                'image' => ''
            ),
            array(
                'title' => 'Post6',
                'content' => 'Artisan',
                'image' => ''
            ),
            array(
                'title' => 'Post7',
                'content' => 'Seeder',
                'image' => ''
            ),
            array(
                'title' => 'Post8',
                'content' => 'Migration',
                'image' => ''
            )
        );
        DB::table('toys')->insert($toys);
    }
}
