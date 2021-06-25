<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    function index()
    {
        return Department::find(2)->getAllEvents;
    }

    function show()
    {
        return Department::all();
    }
}
