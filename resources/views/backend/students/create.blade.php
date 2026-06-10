@extends('backend.layouts.main')

@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Registration Student </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration Student</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex justify-content-end my-2 mx-2">
                <a href="{{ route('admin.student.create') }}" class="btn btn-primary">Create</a>
            </div>
            <div class="card shadow-lg">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.student.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <!-- Course -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Course</label>
                                <select class="form-select" name="course" required>
                                    <option value="">Select Course</option>
                                    <option value="ot">O.T</option>
                                    <option value="dmit">D.M.I.T</option>
                                    <option value="bmit">B.M.I.T</option>
                                    <option value="ctmri">CT/MRI/X-RAY/ICU</option>
                                    <option value="emt">E.M.T</option>
                                    <option value="cms">CMS & ED</option>
                                    <option value="opthemic">OPTHEMIC</option>
                                    <option value="drasser">DRASSER</option>
                                    <option value="nursing">Nursing</option>
                                    <option value="anm">ANM</option>
                                    <option value="gnm">GNM</option>
                                    <option value="pharmacy">Pharmacy</option>
                                    <option value="bpharma">B Pharma</option>
                                    <option value="dpharma">D Pharma</option>
                                </select>
                            </div>

                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                            </div>

                            <!-- Aadhar -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Aadhar Number</label>
                                <input type="number" name="aadhar" class="form-control" placeholder="Enter Aadhar"
                                    required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email"
                                    required>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone"
                                    required>
                            </div>

                            <!-- Father Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Father Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="Father name"
                                    required>
                            </div>

                            <!-- Mother Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mother Name</label>
                                <input type="text" name="mname" class="form-control" placeholder="Mother name"
                                    required>
                            </div>

                            <!-- Gender -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gender</label>
                                <select class="form-select" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                </select>
                            </div>

                            <!-- DOB -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control" required>
                            </div>

                            <!-- Nationality -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nationality</label>
                                <input type="text" name="nation" class="form-control" required>
                            </div>

                            <!-- Religion -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Religion</label>
                                <input type="text" name="religion" class="form-control" required>
                            </div>

                            <!-- Disability -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Disability</label>
                                <select class="form-select" name="disability" required>
                                    <option value="">Select</option>
                                    <option value="Y">Yes</option>
                                    <option value="N">No</option>
                                </select>
                            </div>

                            <!-- Disadvantaged -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Disadvantaged</label>
                                <select class="form-select" name="disadvantaged" required>
                                    <option value="">Select</option>
                                    <option value="Y">Yes</option>
                                    <option value="N">No</option>
                                </select>
                            </div>

                            <!-- Medium -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Medium</label>
                                <select class="form-select" name="medium" required>
                                    <option value="">Select</option>
                                    <option value="H">Hindi</option>
                                    <option value="E">English</option>
                                </select>
                            </div>

                            <!-- Address -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control"></textarea>
                            </div>

                            <!-- Location -->
                            <div class="col-md-4 mb-3">
                                 <label class="form-label">Pin</label>
                                <input type="text" name="pin" class="form-control" placeholder="Pin Code">
                            </div>

                            <div class="col-md-4 mb-3">
                                 <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control" placeholder="City">
                            </div>

                            <div class="col-md-4 mb-3">
                                 <label class="form-label">State</label>
                                <input type="text" name="state" class="form-control" placeholder="State">
                            </div>

                            <!-- Files -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Upload Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Upload Signature</label>
                                <input type="file" name="sign" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Upload Certificate</label>
                                <input type="file" name="certificate" class="form-control">
                            </div>

                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success px-4">Submit</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    @endsection
