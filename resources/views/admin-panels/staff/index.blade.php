@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">Staff</div>
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ route('staff.create') }}" class="btn btn-danger m-3">Create new staff</a>
                        </div>
                    </div>
                    <div class="row pl-3 pr-3 pb-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">Staff list</div>
                                <div class="card-body">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">First name</th>
                                            <th scope="col">Last name</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col"> </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($presenterList as $presenterStaff)
                                            <tr>
                                                <td>{{ $presenterStaff['firstName'] }}</td>
                                                <td>{{ $presenterStaff['lastName'] }}</td>
                                                <td>{{ $presenterStaff['company']['name'] }}</td>
                                                <td>{{ $presenterStaff['email'] }}</td>
                                                <td>{{ $presenterStaff['phone'] }}</td>
                                                <td >
                                                    <a href="{{ route('staff.edit', $presenterStaff['id']) }}" class="btn btn-primary btn-block">Edit</a>
                                                    <form action="{{ route('staff.destroy', $presenterStaff['id']) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger btn-block mt-1" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $paginator->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
