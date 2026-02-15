<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Instructor;

class InstructorPolicy
{
    public function viewAny(User $user) {}
    public function view(User $user, Instructor $instructor) {}
    public function create(User $user) {}
    public function update(User $user, Instructor $instructor) {}
    public function delete(User $user, Instructor $instructor) {}
}
