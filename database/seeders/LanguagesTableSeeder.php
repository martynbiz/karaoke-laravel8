<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'English',
                'created_at' => '2018-04-27 23:00:15',
                'updated_at' => '2018-04-27 23:00:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Japanese',
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:00:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'German',
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:46:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Italian',
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:01:25',
            ),
        ));
        
        
    }
}