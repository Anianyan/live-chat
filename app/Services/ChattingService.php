<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\ChattingRepository;
use App\Models\User;

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
    public function newMessage(Request $request, User $user) {
        // return $this->repo->newMessage($request, $user);
    }
}
