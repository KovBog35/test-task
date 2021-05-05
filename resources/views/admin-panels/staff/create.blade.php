@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">Create company</div>
                <div class="card-body">
                    <form action="{{ route('staff.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="staff-first-name" class="form-label">First name</label>
                            <input name="first-name" type="text" class="form-control" id="staff-first-name" value="{{ old('first-name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="staff-last-name" class="form-label">Last name</label>
                            <input name="last-name" type="text" class="form-control" id="staff-last-name" value="{{ old('last-name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="company-name" class="form-label">Company</label>
                            <input name="company-name" type="text" class="form-control" id="company-name" value="{{ old('company-name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="staff-email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="staff-email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="staff-phone" class="form-label">Phone</label>
                            <input name="phone" type="text" class="form-control" id="staff-phone" value="{{ old('phone') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
