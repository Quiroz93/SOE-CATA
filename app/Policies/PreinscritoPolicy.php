<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Preinscrito;

class PreinscritoPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, Preinscrito $preinscrito) {}
    public function create(User $user) {}
    public function update(User $user, Preinscrito $preinscrito) {}
    public function delete(User $user, Preinscrito $preinscrito) {}
}
