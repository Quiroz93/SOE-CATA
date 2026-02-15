<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Noticia;

class NoticiaPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, Noticia $noticia) {}
    public function create(User $user) {}
    public function update(User $user, Noticia $noticia) {}
    public function delete(User $user, Noticia $noticia) {}
}
