<?php

namespace App\Policies;

use App\Models\Postjob;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Log;

class JobPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    // public function viewAny(User $user): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can view the model.
    //  */
    // public function view(User $user, Postjob $job): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Both admins and members can create jobs
        return true;
        // return $user->isAdmin() || $user->isMember();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Postjob $job): bool
    {
        // \Illuminate\Support\Facades\Log::info('Policy check: user ID ' . $user->id . ', job user ID ' . $job->user_id);
        // Admins can edit any job; Members can edit their own jobs
        return $user->is_admin || $user->id === $job->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Postjob $job): bool
    {
        // Admins can delete any job; Members can delete their own jobs
        return $user->is_admin || $user->id === $job->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, Postjob $job): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(User $user, Postjob $job): bool
    // {
    //     //
    // }
}
