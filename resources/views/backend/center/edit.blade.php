@extends('backend.layouts.main')

@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title">Edit Center</h3>
            </div>

            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('center.update', $center->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $center->name }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Center Name</label>
                                    <input type="text" name="center_name" class="form-control"
                                        value="{{ $center->center_name }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="address" class="form-control" rows="4">{{ $center->address }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Current Photo</label>
                                    <br>

                                    @if ($center->photo)
                                        <img src="{{ asset('uploads/centers/' . $center->photo) }}" width="120"
                                            class="img-thumbnail">
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Change Photo</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Update Center
                                </button>

                                <a href="{{ route('center.index') }}" class="btn btn-secondary">
                                    Back
                                </a>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
