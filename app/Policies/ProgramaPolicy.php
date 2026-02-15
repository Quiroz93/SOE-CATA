<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Programa;

class ProgramaPolicy
{
    public function viewAny(User $user) {
        return false;
    }
    public function view(User $user, Programa $programa) {}
    public function create(User $user) {}
    public function update(User $user, Programa $programa) {}
    public function delete(User $user, Programa $programa) {}
}
