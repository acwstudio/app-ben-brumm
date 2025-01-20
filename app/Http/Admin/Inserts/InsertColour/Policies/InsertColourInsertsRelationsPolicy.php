<?php

namespace App\Http\Admin\Inserts\InsertColour\Policies;

use Domain\Employees\Models\Employee;

class InsertColourInsertsRelationsPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(Employee $employee): bool
    {
//        dd(auth('employee')->id() === 1);
        return auth('employee')->id() === 1;
    }
}
