
<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Rashed',
            'email' => 'user@blog.com',
            'phone' => '+8801521122345',
                        'balance' => '0',
            'branch' => 'Sirajganj Sadar',
            'password' => bcrypt('root'),
        ]);
        DB::table('admins')->insert([
            'id' => '2',
            'name' => 'Admin',
            'email' => 'admin@blog.com',
            'phone' => '+8801521000000',
            'branch' => 'Sirajganj Sadar',
            'password' => bcrypt('root'),
        ]);
        DB::table('supers')->insert([
            'id' => '3',
            'name' => 'Super',
            'email' => 'super@blog.com',
            'phone' => '+8801521460569',
            'password' => bcrypt('root'),
        ]);
        DB::table('branch')->insert([
            'name' => 'Sirajganj Sadar',
            'city' => 'Sirajganj',
            'assests' => ('50000'),
        ]);
    }
}
