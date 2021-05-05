<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Presenters\CompanyPresenter;
use App\Actions\Company\GetCompanyByIdAction;
use App\Actions\Company\GetCompanyByIdRequest;
use App\Actions\Company\DeleteCompanyByIdAction;
use App\Actions\Company\UpdateCompanyByIdAction;
use App\Actions\Company\CreateCompanyByIdAction;
use App\Actions\Company\UpdateCompanyByIdRequest;
use App\Actions\Company\CreateCompanyByIdRequest;
use App\Actions\Company\GetPaginatorForCompanyAction;
use App\Actions\Company\GetPaginatorForCompanyRequest;
use App\Http\Requests\Company\CreateCompanyValidationRequest;
use App\Http\Requests\Company\UpdateCompanyValidationRequest;

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

    public function create(): View
    {
        return view('admin-panels.company.create');
    }

    public function store(
        CreateCompanyByIdAction $createCompanyByIdAction,
        CreateCompanyValidationRequest $request
    ): RedirectResponse {
        $createCompanyByIdAction
            ->execute(new CreateCompanyByIdRequest(
                $request->input('name'),
                $request->input('email'),
                $request->file('logo'),
                $request->input('website')
            ));

        return redirect()->route('companies.index');
    }

    public function edit(
        GetCompanyByIdAction $getCompanyByIdAction,
        CompanyPresenter $companyPresenter,
        string $companyId
    ): View {
        $company = $getCompanyByIdAction
            ->execute(new GetCompanyByIdRequest((int) $companyId))
            ->getResponse();

        $presenter = $companyPresenter->present($company);

        return view('admin-panels.company.edit', compact('presenter'));
    }

    public function update(
        UpdateCompanyByIdAction $updateCompanyByIdAction,
        UpdateCompanyValidationRequest $request,
        string $companyId
    ): RedirectResponse {
        $updateCompanyByIdAction
            ->execute(new UpdateCompanyByIdRequest(
                $request->input('id'),
                $request->input('name'),
                $request->input('email'),
                $request->file('logo'),
                $request->input('website')
            ));

        return redirect()->route('companies.edit', $companyId);
    }

    public function destroy(
        DeleteCompanyByIdAction $deleteCompanyByIdAction,
        string $companyId
    ): RedirectResponse {
        $deleteCompanyByIdAction
            ->execute(new GetCompanyByIdRequest((int) $companyId));

        return redirect()->route('companies.index');
    }
}
