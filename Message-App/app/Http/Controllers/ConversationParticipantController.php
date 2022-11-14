<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;
use App\Models\ConversationParticipants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConversationParticipantController extends Controller
{
    public function store(Request $request)
    {
        if (
            ConversationParticipants::select()
                                    ->where([
                                        'user_id' => auth()->user()->id,
                                        'conversation_id' => $request->input('id')
                                    ])
                                    ->exists()
            )
            {
                return redirect('/');
            }
            
        ConversationParticipants::create([
            'user_id' => auth()->user()->id,
            'conversation_id' => $request->input('id')
        ]);

        return redirect('/');
    }

    public function destroy(Request $request) {
        if (
            ConversationParticipants::select()
                                    ->where([
                                        'user_id' => auth()->user()->id,
                                        'conversation_id' => $request->input('id')
                                    ])
                                    ->exists()
            )
            {
                ConversationParticipants::select()
                ->where([
                    'user_id' => auth()->user()->id,
                    'conversation_id' => $request->input('id')])
                ->delete();
                return redirect('/');
            }
            
       

        return redirect('/');
    }
}
