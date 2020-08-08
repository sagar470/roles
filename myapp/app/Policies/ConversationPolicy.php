<?php

namespace App\Policies;

use App\Conversation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function update(User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    }
}
