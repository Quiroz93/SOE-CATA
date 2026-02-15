<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Competencia;

class CompetenciaPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, Competencia $competencia) {}
    public function create(User $user) {}
    public function update(User $user, Competencia $competencia) {}
    public function delete(User $user, Competencia $competencia) {}
}
