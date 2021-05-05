@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">Companies</div>
                <div class="row">
                    <div class="col-4">
                        <button class="btn btn-danger m-3">Create new company</button>
                    </div>
                </div>
                <div class=card-body">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">Company list</div>
                            <div class="card-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Website</th>
                                        <th scope="col"> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($presenterList as $presenterCompany)
                                    <tr>
                                        <td>{{ $presenterCompany['name'] }}</td>
                                        <td>{{ $presenterCompany['email'] }}</td>
                                        <td>
                                            @if($presenterCompany['logo'])
                                                <img src="{{ $presenterCompany['logo'] }}" alt="logo-{{ $presenterCompany['id']}}">
                                            @endif
                                        </td>
                                        <td><a href="{{ $presenterCompany['website'] }}">{{ $presenterCompany['website'] }}</a></td>
                                        <td >
                                            <a href="{{ route('companies.edit', $presenterCompany['id']) }}" class="btn btn-primary btn-block">Edit</a>
                                            <form action="{{ route('companies.destroy', $presenterCompany['id']) }}" method="POST">
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
