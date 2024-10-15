<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $employees = Employee::select('id', 'name', 'jobTitle', 'reportsTo')
        ->with('manager:id,name')
        ->take(15)
        ->get();
    return view('welcome', compact('employees'));
});
