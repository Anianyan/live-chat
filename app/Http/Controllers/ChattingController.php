<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\ChattingService;
use App\Models\User;
use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use Illuminate\Support\Facades\Auth;

class ChattingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ChattingService $service)
    {
        $this->service = $service;
    }

    /**
     * Chatting room view
     */
    public function chattingView() {
        return view('pages.live-chat', ['user' => Auth::user(), 'messages' => Message::all()]);
    }

    /**
     * Push new message
     */
    public function newMessage(StoreMessageRequest $request, User $user) {
        $this->service->newMessage($request, $user);
        return response('Success', 200);
    }
}
