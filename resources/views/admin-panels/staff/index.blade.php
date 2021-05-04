@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">Staff</div>
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-danger m-3">Create new staff</button>
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
                                        <tr>
                                            <td>First name</td>
                                            <td>Last name</td>
                                            <td>Company</td>
                                            <td>Email</td>
                                            <td>Phone</td>
                                            <td >
                                                <button class="btn btn-primary">Edit</button>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
