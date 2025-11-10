<?php

namespace RamdanEwis\Permission\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use MongoDB\Laravel\Eloquent\Model;
use RamdanEwis\Permission\Contracts\RoleInterface as Role;

/**
 * Event fired when a role is assigned to a model
 */
class RoleAssigned
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public readonly Model $model,
        public readonly Role $role
    ) {
    }
}
