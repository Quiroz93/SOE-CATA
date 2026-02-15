<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, User $model) {}
    public function create(User $user) {}
    public function update(User $user, User $model) {}
    public function delete(User $user, User $model) {}
}
