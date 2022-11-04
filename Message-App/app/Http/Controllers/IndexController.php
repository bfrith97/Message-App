<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function show()
    {   
        // dd(auth()->user());
        $messages = Message::select()
            ->get();

        $users = User::select()
            ->get();

        $data = ['messages' =>$messages, 
                 'users' => $users];
        return view('index', $data);
    }

    public function store(Request $request)
    {
        $data = $request->input();
        Message::create($data);

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $chat = Message::select();
        $chat->delete();

        return redirect('/');
    }
}
