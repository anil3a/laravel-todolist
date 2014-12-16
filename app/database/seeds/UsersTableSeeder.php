<?php

/**
 * UsersTableSeeder Seeder Class
 * User: Anil
 * Date: 20/10/2014
 * Time: 9:08 AM
 */

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
                'name' => 'anil',
                'password' => Hash::make('anil'),
                'email' => 'anilprz3@gmail.com'
            )
        );

        DB::table('users')->insert($users);
    }

}