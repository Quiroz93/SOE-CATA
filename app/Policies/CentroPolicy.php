<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Centro;

class CentroPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, Centro $centro) {}
    public function create(User $user) {}
    public function update(User $user, Centro $centro) {}
    public function delete(User $user, Centro $centro) {}
}
