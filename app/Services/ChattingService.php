<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\ChattingRepository;
use App\Http\Requests\StoreMessageRequest;
use App\Models\User;
use App\Events\ChattingEvent;

class ChattingService
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ChattingRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Push new message
     */
    public function newMessage(StoreMessageRequest $request, User $user) {
        $message = $request->input('message');
        // Create event instance.
        event(new ChattingEvent([
            'message' => $message,
            'user' => $user->name,
        ]));

        return $this->repo->newMessage($user, $message);
    }
}
