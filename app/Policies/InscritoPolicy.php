<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Inscrito;

class InscritoPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, Inscrito $inscrito) {}
    public function create(User $user) {}
    public function update(User $user, Inscrito $inscrito) {}
    public function delete(User $user, Inscrito $inscrito) {}
}
