<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ChattingService;
use App\Models\User;
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
        return view('pages.live-chat', ['user' => Auth::user()]);
    }

    /**
     * Push new message
     */
    public function newMessage(Request $request, User $user) {
        return $this->service->newMessage($request, $user);
    }
}
