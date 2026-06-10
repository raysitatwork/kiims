@extends('backend.layouts.main')

@section('main-container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Registration Student Edit </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration Student Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex justify-content-end my-2 mx-2">
                <a href="{{ route('admin.userList') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="card shadow-lg">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.student.update',$student->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <!-- Course -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Course</label>
                                <select class="form-select" name="course" required>
                                    <option value="">Select Course</option>
                                    <option value="ot"{{ $student->course == 'ot' ? 'selected' : '' }}>O.T</option>
                                    <option value="dmit"{{ $student->course == 'dmit' ? 'selected' : '' }}>D.M.I.T</option>
                                    <option value="bmit"{{ $student->course == 'bmit' ? 'selected' : '' }}>B.M.I.T</option>
                                    <option value="ctmri"{{ $student->course == 'ctmri' ? 'selected' : '' }}>CT/MRI/X-RAY/ICU</option>
                                    <option value="emt"{{ $student->course == 'emt' ? 'selected' : '' }}>E.M.T</option>
                                    <option value="cms"{{ $student->course == 'cms' ? 'selected' : '' }}>CMS & ED</option>
                                    <option value="opthemic"{{ $student->course == 'opthemic' ? 'selected' : '' }}>OPTHEMIC</option>
                                    <option value="drasser"{{ $student->course == 'drasser' ? 'selected' : '' }}>DRASSER</option>
                                    <option value="nursing"{{ $student->course == 'nursing' ? 'selected' : '' }}>Nursing</option>
                                    <option value="anm"{{ $student->course == 'anu' ? 'selected' : '' }}>ANM</option>
                                    <option value="gnm"{{ $student->course == 'gnm' ? 'selected' : '' }}>GNM</option>
                                    <option value="pharmacy"{{ $student->course == 'pharmacy' ? 'selected' : '' }}>Pharmacy</option>
                                    <option value="bpharma"{{ $student->course == 'bpharma' ? 'selected' : '' }}>B Pharma</option>
                                    <option value="dpharma"{{ $student->course == 'dpharma' ? 'selected' : '' }}>D Pharma</option>
                                </select>
                            </div>

                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $student->name ?? '' }}" required>
                            </div>

                            <!-- Aadhar -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Aadhar Number</label>
                                <input type="number" name="aadhar" class="form-control" placeholder="Enter Aadhar" value="{{ $student->aadhar ?? '' }}"
                                    required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $student->email ?? '' }}"
                                    required>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone" value="{{ $student->phone ?? '' }}"
                                    required>
                            </div>

                            <!-- Father Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Father Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="Father name" value="{{ $student->fname ?? '' }}"
                                    required>
                            </div>

                            <!-- Mother Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mother Name</label>
                                <input type="text" name="mname" class="form-control" placeholder="Mother name" value="{{ $student->mname ?? '' }}"
                                    required>
                            </div>

                            <!-- Gender -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gender</label>
                                <select class="form-select" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="M"{{ $student->gender == 'M' ? 'selected' : '' }}>Male</option>
                                    <option value="F"{{ $student->gender == 'F' ? 'selected' : '' }}>Female</option>
                                    <option value="O"{{ $student->gender == 'O' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>

                            <!-- DOB -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control" value="{{ $student->dob ?? '' }}" required>
                            </div>

                            <!-- Nationality -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nationality</label>
                                <input type="text" name="nation" class="form-control" value="{{ $student->nation ?? '' }}" required>
                            </div>

                            <!-- Religion -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Religion</label>
                                <input type="text" name="religion" class="form-control" value="{{ $student->religion ?? '' }}" required>
                            </div>

                            <!-- Disability -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Disability</label>
                                <select class="form-select" name="disability" required>
                                    <option value="">Select</option>
                                    <option value="Y"{{ $student->disability == 'Y' ? 'selected' : '' }}>Yes</option>
                                    <option value="N"{{ $student->disability == 'N' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <!-- Disadvantaged -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Disadvantaged</label>
                                <select class="form-select" name="disadvantaged" required>
                                    <option value="">Select</option>
                                    <option value="Y"{{ $student->disadvantaged == 'Y' ? 'selected' : '' }}>Yes</option>
                                    <option value="N"{{ $student->disadvantaged == 'N' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <!-- Medium -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Medium</label>
                                <select class="form-select" name="medium" required>
                                    <option value="">Select</option>
                                    <option value="H"{{ $student->medium == 'H' ? 'selected' : '' }}>Hindi</option>
                                    <option value="E"{{ $student->medium == 'E' ? 'selected' : '' }}>English</option>
                                </select>
                            </div>

                            <!-- Address -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control">{{ $student->address ?? '' }}</textarea>
                            </div>

                            <!-- Location -->
                            <div class="col-md-4 mb-3">
                                 <label class="form-label">Pin</label>
                                <input type="text" name="pin" class="form-control" placeholder="Pin Code" value="{{ $student->pin ?? '' }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                 <label class="form-label">City</label>
                                <input type="text" name="city" class="form-control" placeholder="City" value="{{ $student->city ?? '' }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                 <label class="form-label">State</label>
                                <input type="text" name="state" class="form-control" placeholder="State" value="{{ $student->state ?? '' }}">
                            </div>

                            <!-- Files -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Upload Image</label>
                                <img src="{{ asset('uploads/images'.optional($student)->image) }}" alt="" style="width: 100px">
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Upload Signature</label>
                                <img src="{{ asset('uploads/signs'.optional($student)->sign) }}" alt="" style="width: 100px">
                                <input type="file" name="sign" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Upload Certificate</label>
                                <img src="{{ asset('uploads/certificates'.optional($student)->certificate) }}" alt="" style="width: 100px">
                                <input type="file" name="certificate" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status" required>
                                    <option value="">Select</option>
                                    <option value="pending"{{ $student->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved"{{ $student->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="cancelled"{{ $student->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
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
