@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">Select admin panel</div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body">
                    <a class="card-link text-uppercase" href="{{route('companies.index')}}">Company</a>
                    <a class="card-link text-uppercase" href="{{route('staff.index')}}">Staff</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
