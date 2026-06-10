
@extends('frontend.layouts.main')
@section('main-container')
    
        @if(session('swal_message'))
            <script>
                Swal.fire({
                    icon: '{{ session('swal_message')['type'] }}',
                    title: '{{ session('swal_message')['title'] }}',
                    text: '{{ session('swal_message')['text'] }}',
                });
            </script>
        @endif
        <section class="py-5" style="background-color: #E6F4FA;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mb-4">
                        <h2 class="fw-bold">🎓 Verify Your Enrollment Number</h2>
                        <p class="text-muted">Enter your enrollment ID to check your approval status.</p>
                    </div>
        
                    <div class="col-md-8">
                        <form action="{{ route('admin.searchByEnrollment') }}" method="GET" class="row g-3 shadow p-4 rounded bg-white">
                            <div class="col-md-9">
                                <input type="text" name="enrol_id" class="form-control form-control-lg" placeholder="Enter Enrollment ID" required>
                            </div>
                            <div class="col-md-3 d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Verify</button>
                            </div>
                        </form>
                    </div>
        
                    @if(session('swal_message'))
                        <script>
                            Swal.fire({
                                icon: '{{ session('swal_message')['type'] }}',
                                title: '{{ session('swal_message')['title'] }}',
                                text: '{{ session('swal_message')['text'] }}',
                                confirmButtonColor: '#3085d6'
                            });
                        </script>
                    @endif
                </div>
            </div>
            @if(session('user_data'))
                @php $user = session('user_data'); @endphp
                <div class="container mt-5">
                    <div class="card shadow">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0">Enrollment Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('/uploads/certificates/'.$user->certificate) }}" alt="certificate" width="100px">
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Enrollment ID</th>
                                    <td>{{ $user->enrol_id }}</td>
                                </tr>
                                <tr>
                                    <th>Profile</th>
                                    <td><img src="{{ asset('/uploads/images/'.$user->image) }}" alt="image"></td>
                                </tr>                                
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Course</th>
                                    <td>{{ strtoupper($user->course) }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><span class="badge bg-success">Approved</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </section>
        
        <!-- Testimonial Section End -->

@endsection

       