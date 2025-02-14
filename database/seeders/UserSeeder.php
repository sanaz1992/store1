<?php
namespace Database\Seeders;

use App\Models\User;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     [
        //         'name'     => 'ali',
        //         'email'    => 'ali2@gmail.com',
        //         'password' => Hash::make('12345678'),
        //     ],
        //     [
        //         'name'     => 'fateme',
        //         'email'    => 'fateme2@gmail.com',
        //         'password' => Hash::make('12345678'),
        //     ],
        // ]);
        User::factory(10)->create();
    }
}
