<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Martyn Bissett',
                'email' => 'martynbissett@yahoo.co.uk',
                'password' => '$2y$10$fq35cYXLPMOVVA9maMDhuu05lPMV9.Xe1S4kJCMfG24aFhJ/f8pCC',
                'remember_token' => 'oeEYUdeFXrxscfpMcyR31k7ybjxWhcXOOamTScUAz953J12QtJxsVkGWroz0',
                'created_at' => '2019-10-29 22:41:51',
                'updated_at' => '2019-10-29 22:41:51',
            ),
        ));
        
        
    }
}