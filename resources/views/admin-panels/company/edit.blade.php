@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">Edit company: <span class="font-weight-bold">{{ $presenter['name'] }}</span></div>
                <div class="card-body">
                    <form action="{{ route('companies.update', $presenter['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $presenter['id'] }}">
                        <div class="mb-3">
                            <label for="company-name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="company-name" value="{{ $presenter['name'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="company-email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="company-email" value="{{ $presenter['email'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="company-website" class="form-label">Website</label>
                            <input name="website" type="text" class="form-control" id="company-website" value="{{ $presenter['website'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="company-logo" class="form-label">Logo</label>
                            <input name="logo" type="file" id="company-logo">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
