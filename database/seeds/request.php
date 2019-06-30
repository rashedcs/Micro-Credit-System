<?php

use Illuminate\Database\Seeder;

class request extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('request')->insert([
            'id' => '1',
            'name' => 'Rashed',
            'email' => 'user@blog.com',
            'amount' => '1000',
            'description' => 'For emergency'
        ]);
    }
}
