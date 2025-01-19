<?php

namespace App\Policies;

use Domain\Employees\Models\Employee;
use Domain\Inserts\Insert\Models\Insert;
use Domain\Users\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class InsertPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function index(Employee $employee): bool
    {
//        dd(auth('employee')->id() === 2);
        return auth('employee')->id() === 2;
    }
}
