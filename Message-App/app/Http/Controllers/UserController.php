<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;
use App\Models\ConversationParticipants;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'chat_colour' => $request->input('chat_colour')
        ];

        $user = User::where('id', auth()->user()->id);

        $user->update($data);

        return redirect('/');
    }

    public function show($id) {
        $user = User::where('id', $id)->get();
        $data = [
            'user' => $user[0]
        ];

        return view('user', $data);
    }
}
