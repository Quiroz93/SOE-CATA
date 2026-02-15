<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Novedad;

class NovedadPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, Novedad $novedad) {}
    public function create(User $user) {}
    public function update(User $user, Novedad $novedad) {}
    public function delete(User $user, Novedad $novedad) {}
}
