<?php

namespace Database\Seeders;

use App\Models\ConversationParticipants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConversationParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConversationParticipants::create([
            'user_id' => 1,
            'conversation_id' => 1,
        ]);

        ConversationParticipants::create([
            'user_id' => 2,
            'conversation_id' => 1,
        ]);

        ConversationParticipants::create([
            'user_id' => 3,
            'conversation_id' => 1,
        ]);
    }
}
