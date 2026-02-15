<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Oferta;

class OfertaPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, Oferta $oferta) {}
    public function create(User $user) {}
    public function update(User $user, Oferta $oferta) {}
    public function delete(User $user, Oferta $oferta) {}
}
