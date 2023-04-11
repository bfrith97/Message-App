<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'user_id' => 3,
            'conversation_id' => 1,
            'content' => "I'm Commander Shepard and this is my favourite Chat on the citadel",
        ]);
        Message::create([
            'user_id' => 2,
            'conversation_id' => 1,
            'content' => "That's pretty cool... ",
        ]);
        Message::create([
            'user_id' => 3,
            'conversation_id' => 1,
            'content' => "Yup! Hey, who's the new guy?",
        ]);
        Message::create([
            'user_id' => 4,
            'conversation_id' => 2,
            'content' => "If you live in a glass house, don't go chucking stuff about...",
        ]);
        Message::create([
            'user_id' => 5,
            'conversation_id' => 2,
            'content' => "You're an idiot!",
        ]);
    }
}
