<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Presenters\StaffPresenter;
use App\Actions\Staff\GetStaffByIdAction;
use App\Actions\Staff\GetStaffByIdRequest;
use App\Actions\Staff\CreateStaffByIdAction;
use App\Actions\Staff\DeleteStaffByIdAction;
use App\Actions\Staff\UpdateStaffByIdAction;
use App\Actions\Staff\CreateStaffByIdRequest;
use App\Actions\Staff\UpdateStaffByIdRequest;
use App\Actions\Staff\GetPaginatorForStaffAction;
use App\Actions\Staff\GetPaginatorForStaffRequest;
use App\Http\Requests\Staff\CreateStaffValidationRequest;
use App\Http\Requests\Staff\UpdateStaffValidationRequest;

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

        return view('admin-panels.staff.edit', compact('presenter'));
    }

    public function update(
        UpdateStaffByIdAction $updateStaffByIdAction,
        UpdateStaffValidationRequest $request,
        string $staffId
    ): RedirectResponse {
        $updateStaffByIdAction
            ->execute(new UpdateStaffByIdRequest(
                $request->input('id'),
                $request->input('first-name'),
                $request->input('last-name'),
                $request->input('company-name'),
                $request->input('email'),
                $request->input('phone')
            ));

        return redirect()->route('staff.edit', $staffId);
    }

    public function destroy(
        DeleteStaffByIdAction $deleteStaffByIdAction,
        string $staffId
    ): RedirectResponse {
        $deleteStaffByIdAction
            ->execute(new GetStaffByIdRequest((int) $staffId));

        return redirect()->route('staff.index');
    }
}
