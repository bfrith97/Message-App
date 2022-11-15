<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;
use App\Models\ConversationParticipants;
use App\Models\UserBlocks;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'img' => $request->input('img'),
            'bio' => $request->input('bio'),
            'chat_colour' => $request->input('chat_colour')
        ];

        $user = User::where('id', auth()->user()->id);

        $user->update($data);

        return redirect('/');
    }

    public function show($id) {
        $user = User::where('id', $id)->get();
        
        if(UserBlocks::select()->where([
            'user_id' => auth()->user()->id,
            'target_user_id' => $user[0]->id
            ])->exists()) {
                $blocked = true;
            }
            
        $data = [
            'user' => $user[0]
        ];

        if(isset($blocked)) {
            $data['blocked'] = $blocked;
        }

        return view('user', $data);
    }

    public function block(Request $request) {
        $user = $request->input('user');
        $targetUser = $request->input('targetuser');

        UserBlocks::create([
            'user_id' => $user,
            'target_user_id' => $targetUser
        ]);

        return redirect('/');
    }

    public function unblock(Request $request) {
        $user = $request->input('user');
        $targetUser = $request->input('targetuser');

        UserBlocks::where([
            'user_id' => $user,
            'target_user_id' => $targetUser
        ])->delete();

        return redirect('/');
    }
}
