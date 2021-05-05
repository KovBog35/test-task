@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">Edit staff:
                    <span class="font-weight-bold">
                        {{ $presenter['firstName'] .' '. $presenter['lastName'] }}
                    </span>
                </div>
                <div class="card-body">
                    <form action="{{ route('staff.update', $presenter['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $presenter['id'] }}">
                        <div class="mb-3">
                            <label for="staff-first-name" class="form-label">First name</label>
                            <input name="first-name" type="text" class="form-control" id="staff-first-name" value="{{ $presenter['firstName'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="staff-last-name" class="form-label">Last name</label>
                            <input name="last-name" type="text" class="form-control" id="staff-last-name" value="{{ $presenter['lastName'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="company-name" class="form-label">Company</label>
                            <input name="company-name" type="text" class="form-control" id="company-name" value="{{ $presenter['company']['name'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="staff-email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="staff-email" value="{{ $presenter['email'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="staff-phone" class="form-label">Phone</label>
                            <input name="phone" type="text" class="form-control" id="staff-phone" value="{{ $presenter['phone'] }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
