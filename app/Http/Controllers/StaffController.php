<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StaffController extends Controller
{
    public function index(): View
    {
        return view('admin-panels.staff.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Staff $staff)
    {
        //
    }

    public function edit(Staff $staff)
    {
        //
    }

    public function update(Request $request, Staff $staff)
    {
        //
    }

    public function destroy(Staff $staff)
    {
        //
    }
}
