<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    function generateRandomColor() {
        // generate a random RGB value
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);

        // convert RGB to hex
        $hex = sprintf("#%02x%02x%02x", $red, $green, $blue);

        // return the hex color code
        return $hex;
    }

    public function run()
    {
        User::create([
            'name' => 'Mike Tyson',
            'email' => 'user@email.com',
            'bio' => "I'm here to make new friends.",
            'img' => 'https://www.ringtv.com/wp-content/uploads/2020/04/GettyImages-161753224.jpg',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Billy Kid',
            'email' => 'billy@email.com',
            'password' => Hash::make('billy'),
            'bio' => "I like to dance, but not in the air.",
            'img' => 'https://variety.com/wp-content/uploads/2021/05/William-Bonney.jpg?w=681&h=383&crop=1',
            'chat_colour' => '#ff5d4a',
        ]);

        User::create([
            'name' => 'John Shepherd',
            'email' => 'normandy@email.com',
            'password' => Hash::make('effect'),
            'bio' => "Each of us needs to be willing to die to save humanity. Anything less...and they've already won!",
            'img' => 'https://avatars.akamai.steamstatic.com/741268901ce1f848d517241c2314c8c2a6b03ece_full.jpg',
            'chat_colour' => '#1e9661',
        ]);
    }
}
