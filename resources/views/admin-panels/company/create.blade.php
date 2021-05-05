@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">Create company</div>
                <div class="card-body">
                    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="mb-3">
                            <label for="company-name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="company-name">
                        </div>
                        <div class="mb-3">
                            <label for="company-email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="company-email">
                        </div>
                        <div class="mb-3">
                            <label for="company-website" class="form-label">Website</label>
                            <input name="website" type="text" class="form-control" id="company-website">
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
