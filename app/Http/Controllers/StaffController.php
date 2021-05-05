<?php

namespace App\Http\Controllers;

use App\Actions\Staff\CreateStaffByIdRequest;
use App\Http\Requests\Staff\CreateStaffValidationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Presenters\StaffPresenter;
use App\Actions\Staff\CreateStaffByIdAction;
use App\Actions\Staff\GetPaginatorForStaffAction;
use App\Actions\Staff\GetPaginatorForStaffRequest;

class StaffController extends Controller
{
    public function getPaginatorForStaff(
        GetPaginatorForStaffAction $getAllStaffAction,
        StaffPresenter $staffPresenter,
        Request $request
    ): View {
        $paginator = $getAllStaffAction
            ->execute(new GetPaginatorForStaffRequest(
                (int) $request->input('page')
            ))
            ->getResponse();

        $presenterList = $staffPresenter->presentCollection($paginator);

        return view('admin-panels.staff.index', compact( 'paginator', 'presenterList'));
    }

    public function create(): View
    {
        return view('admin-panels.staff.create');
    }

    public function store(
        CreateStaffByIdAction $createStaffByIdAction,
        CreateStaffValidationRequest $request
    ): RedirectResponse {
        $createStaffByIdAction
            ->execute(new CreateStaffByIdRequest(
                $request->input('first-name'),
                $request->input('last-name'),
                $request->input('company-name'),
                $request->input('email'),
                $request->input('phone')
            ));

        return redirect()->route('staff.index');
    }

    public function edit(
        GetStaffByIdAction $getStaffByIdAction,
        StaffPresenter $staffPresenter,
        string $staffId
    ): View {
        $staff = $getStaffByIdAction
            ->execute(new GetStaffByIdRequest((int) $staffId))
            ->getResponse();

        $presenter = $staffPresenter->present($staff);

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
