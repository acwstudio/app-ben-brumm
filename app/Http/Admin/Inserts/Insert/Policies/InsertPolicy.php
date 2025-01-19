<?php

namespace App\Http\Admin\Inserts\Insert\Policies;

use Domain\Employees\Models\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

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
//        dd(auth('employee')->id() === 1);
        return auth('employee')->id() === 2;
    }

    public function store(Employee $employee): bool
    {
//        dd(auth('employee')->id() === 1);
        return auth('employee')->id() === 2;
    }

    public function show(Employee $employee): bool
    {
//        dd(auth('employee')->id() === 1);
        return auth('employee')->id() === 2;
    }

    public function update(Employee $employee): bool
    {
//        dd(auth('employee')->id() === 1);
        return auth('employee')->id() === 2;
    }

    public function destroy(Employee $employee): bool
    {
//        dd(auth('employee')->id() === 1);
        return auth('employee')->id() === 2;
    }
}
