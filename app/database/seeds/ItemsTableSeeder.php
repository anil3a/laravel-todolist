<?php
/**
 * ItemsTableSeeder Seeder Class
 * User: Anil
 * Date: 20/10/2014
 * Time: 9:14 AM
 */

class ItemsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('items')->delete();

        $items = array(
            array(
                'owner_id'     => 1,
                'name'         => 'Pick a milk',
                'done'         => false
            ),
            array(
                'owner_id'     => 1,
                'name'         => 'Read Nexus News',
                'done'         => true
            ),
            array(
                'owner_id'     => 1,
                'name'         => 'Prepare documents for Bike',
                'done'         => true
            ),

        );

        DB::table('items')->insert($items);
    }

} 