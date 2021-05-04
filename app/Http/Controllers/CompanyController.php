<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Presenters\CompanyPresenter;

class CompanyController extends Controller
{
    public function index(
        CompanyPresenter $companyPresenter
    ): View {
        $companies = Company::all();

        $presenterList = $companyPresenter->presentCollection($companies);

        return view('admin-panels.company.index', compact('presenterList'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Company $company)
    {
        //
    }

    public function edit(Company $company)
    {
        //
    }

    public function update(Request $request, Company $company)
    {
        //
    }

    public function destroy(Company $company)
    {
        //
    }
}
