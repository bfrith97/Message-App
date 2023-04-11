<?php

namespace Database\Seeders;

use App\Models\Conversation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConversationsTableSeeder extends Seeder
{
    public function run()
    {
        Conversation::create([
            'user1_id' => 1,
            'user2_id' => 1,
            'name' => 'Super Chat',
        ]);
        Conversation::create([
            'user1_id' => 1,
            'user2_id' => 1,
            'name' => 'Fun Chat',
        ]);
        Conversation::create([
            'user1_id' => 1,
            'user2_id' => 1,
            'name' => 'Exciting Chat',
        ]);
        Conversation::create([
            'user1_id' => 1,
            'user2_id' => 1,
            'name' => 'Cool Chat'
        ]);
    }
}
