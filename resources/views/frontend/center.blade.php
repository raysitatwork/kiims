@extends('frontend.layouts.main')

@section('main-container')
    <style>
        .center-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
            height: 100%;
        }

        .center-image img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            /* FULL IMAGE SHOW (NO CUT) */
            background: #f8f9fa;
            display: block;
        }

        .center-content {
            padding: 12px;
            text-align: center;
        }

        .center-content h5 {
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .owner {
            font-weight: 600;
            color: #0d6efd;
            margin-bottom: 3px;
            font-size: 14px;
        }

        .address {
            font-size: 13px;
            color: #777;
            margin-bottom: 8px;
        }
    </style>

    <div class="text-center mb-4">
        <h2 class="fw-bold">Our Training Centers</h2>
        <p class="text-muted">Explore our authorized training centers across India</p>
    </div>

    <div class="container py-4">
        <div class="row g-4">

            @foreach ($centers as $center)
                <div class="col-lg-3 col-md-4 col-sm-6">

                    <div class="center-card">

                        <div class="center-image">
                            <img src="{{ asset('uploads/centers/' . $center->photo) }}" alt="{{ $center->center_name }}">
                        </div>

                        <div class="center-content">
                            <h5>{{ $center->center_name }}</h5>

                            <p class="owner">
                                {{ $center->name }}
                            </p>

                            <p class="address">
                                {{ $center->address }}
                            </p>

                            {{-- <a href="#" class="btn btn-primary btn-sm w-100">
                            View Details
                        </a> --}}
                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection