<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('client')->insert(
            [
                'title' => 'mr',
                'name' => 'Jhon',
                'last_name' => 'Doe',
                'address' => 'Street 123',
                'zip_code' => '06040',
                'city' => 'Tulsa',
                'state' => 'OK',
                'email' => 'jhon@example.com',
            ]
        );

        DB::table('client')->insert(
            [
                'title' => 'mrs',
                'name' => 'Jane',
                'last_name' => 'Doe',
                'address' => 'Another Street 123',
                'zip_code' => '12056',
                'city' => 'Los Angeles',
                'state' => 'CA',
                'email' => 'jane@example.com',
            ]
        );
    }
}
