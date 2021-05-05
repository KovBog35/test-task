<?php

namespace App\Http\Controllers;

use App\Actions\Company\DeleteCompanyByIdAction;
use App\Actions\Company\DeleteCompanyByIdRequest;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Presenters\CompanyPresenter;
use App\Actions\Company\GetPaginatorForCompanyAction;
use App\Actions\Company\GetPaginatorForCompanyRequest;

class CompanyController extends Controller
{
    public function getPaginatorForCompanies(
        GetPaginatorForCompanyAction $getAllCompanyAction,
        CompanyPresenter $companyPresenter,
        Request $request
    ): View {
        $paginator = $getAllCompanyAction
            ->execute(new GetPaginatorForCompanyRequest(
                (int) $request->input('page')
            ))
            ->getResponse();

        $presenterList = $companyPresenter->presentCollection($paginator);

        return view('admin-panels.company.index', compact( 'paginator', 'presenterList'));
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

    public function destroy(
        DeleteCompanyByIdAction $deleteCompanyByIdAction,
        string $companyId
    ): RedirectResponse {
        $deleteCompanyByIdAction
            ->execute(new DeleteCompanyByIdRequest((int) $companyId));

        return redirect()->route('companies.index');
    }
}
