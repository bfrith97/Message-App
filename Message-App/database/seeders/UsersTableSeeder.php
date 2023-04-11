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

        User::create([
            'name' => 'Karl Pilkington',
            'email' => 'orange@email.com',
            'password' => Hash::make('head'),
            'bio' => "I think people would live a bit longer if they didn't know how old they were. Age puts restrictions on things.",
            'img' => 'https://yt3.googleusercontent.com/ytc/AL5GRJXDgoL66Mij6_z4ZkAvBpFuzRAXsKmwSYhxQZEm=s900-c-k-c0x00ffffff-no-rj',
            'chat_colour' => '#ff7c2b',
        ]);

        User::create([
            'name' => 'Ricky Gervais',
            'email' => 'brent@email.com',
            'password' => Hash::make('bully'),
            'bio' => "Karl Pilkington has the roundest head, I think, in the world.",
            'img' => 'https://pbs.twimg.com/profile_images/633372900452663297/uc__OXgS_400x400.jpg',
            'chat_colour' => '#003270',
        ]);
    }
}
