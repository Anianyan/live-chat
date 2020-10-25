<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;


class ChattingRepository
{
    /**
     * Store message in DB
     */
    public function newMessage(User $user, $message) {
        return Message::create([
            'sender_id' => $user->id,
            'message' => $message,
        ]);
    }
}
