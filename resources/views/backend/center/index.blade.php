@extends('backend.layouts.main')
@section('main-container')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Center List </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Center List</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end my-2">
                <a href="{{ Route('center.create') }}" class="btn btn-primary">Create</a>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th> Name </th>
                                            <th> Center Name </th>
                                            <th> Address </th>
                                            <th> Photo </th>
                                            {{-- <th>Status</th> --}}
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($centers as $center)
                                            <tr>
                                                <td>{{ $center->id }}</td>
                                                <td>{{ $center->name }}</td>
                                                <td>{{ $center->center_name }}</td>
                                                <td>{{ $center->address }}</td>

                                                <td>
                                                    <img src="{{ asset('uploads/centers/' . $center->photo) }}"
                                                        width="70">
                                                </td>

                                                <td>
                                                    <a href="{{ route('center.edit', $center->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        Edit
                                                    </a>

                                                    <a href="{{ route('center.delete', $center->id) }}"
                                                        class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Delete this center?')">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    {{-- <tbody>
                                        @php
                                            $sn = 1;
                                        @endphp
                                        @foreach ($UserList as $item)
                                            <tr>
                                                <td>{{ $sn++ }}</td>
                                                <th>{{ $item->enrol_id }}</th>
                                                <td>
                                                    @if ($item->course == 'ot')
                                                        O.T
                                                    @elseif($item->course == 'dmit')
                                                        D.M.I.T
                                                    @elseif($item->course == 'bmit')
                                                        B.M.I.T
                                                    @elseif($item->course == 'ctmri')
                                                        CT/MRI/X-RAY/ICU
                                                    @elseif($item->course == 'emt')
                                                        E.M.T
                                                    @elseif($item->course == 'cms')
                                                        CMS & ED
                                                    @elseif($item->course == 'opthemic')
                                                        OPTHEMIC
                                                    @elseif($item->course == 'drasser')
                                                        DRASSER
                                                    @elseif($item->course == 'nursing')
                                                        Nursing
                                                    @elseif($item->course == 'anm')
                                                        ANM
                                                    @elseif($item->course == 'gnm')
                                                        GNM
                                                    @elseif($item->course == 'pharmacy')
                                                        Pharmacy
                                                    @elseif($item->course == 'bpharma')
                                                        B Pharma
                                                    @elseif($item->course == 'dpharma')
                                                        D Pharma
                                                    @endif
                                                </td>
                                                <td class="py-1">{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->aadhar }}</td>
                                                <td>
                                                    <img src="{{ url('uploads/certificates/' . $item->certificate) }}"
                                                        alt=""height="60" width="60">
                                                </td>
                                                <td>
                                                    <img src="{{ url('uploads/images/' . $item->image) }}"
                                                        alt=""height="60" width="60">
                                                </td>
                                                <td>
                                                    <img src="{{ url('uploads/signs/' . $item->sign) }}"
                                                        alt=""height="60" width="60">
                                                </td>
                                                <td>{{ $item->fname }}</td>
                                                <td>{{ $item->mname }}</td>
                                                <td>
                                                    @if ($item->gender == 'F')
                                                        Female
                                                    @elseif($item->gender == 'M')
                                                        Male
                                                    @else
                                                        Other
                                                    @endif
                                                </td>
                                                <td>{{ $item->dob }}</td>
                                                <td>{{ $item->religion }}</td>
                                                <td>
                                                    @if ($item->disability == 'Y')
                                                        Yes
                                                    @elseif($item->disability == 'N')
                                                        No
                                                    @endif
                                                </td>
                                                <td>

                                                    @if ($item->disadvantaged == 'Y')
                                                        Yes
                                                    @elseif($item->disadvantaged == 'N')
                                                        No
                                                    @endif

                                                </td>
                                                <td>
                                                    @if ($item->medium == 'H')
                                                        Hindi
                                                    @elseif($item->medium == 'E')
                                                        English
                                                    @endif
                                                </td>
                                                <td>{{ $item->pin }}</td>
                                                <td>{{ $item->city }}</td>
                                                <td>{{ $item->state }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>
                                                    @if ($item->status == 'pending')
                                                        <span class="badge bg-warning text-dark">Pending</span>
                                                    @elseif($item->status == 'approved')
                                                        <span class="badge bg-success">Approved</span>
                                                    @elseif($item->status == 'cancel')
                                                        <span class="badge bg-danger">Cancelled</span>
                                                    @endif

                                                </td>
                                                <td>                                                    
                                                    <a href="{{ route('admin.student.edit', $item->id) }}"
                                                        class="btn text-primary">edit</a>
                                                    <a
                                                        href="{{ route('admin.UserDlt', $item->id) }}"class="btn text-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody> --}}
                                </table>
                                <div class="text-start">
                                    {{-- {{ $UserList->links() }} --}}
                                </div>
                                {{-- <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('admin.status.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="user_id" id="modal_user_id">
                                            <div class="modal-content" style="background-color: #fff;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="statusModalLabel">Update Status</h5>
                                                    <button type="button" class="btn" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        &times;
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Select Status</label>
                                                        <select name="status" id="modal_status" class="form-control"
                                                            required>
                                                            <option value="pending">Pending</option>
                                                            <option value="approved">Approved</option>
                                                            <option value="cancel">Cancelled</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Upload Certificate</label>
                                                        <div id="certificate_preview" style="margin-bottom:10px;"></div>
                                                        <input type="file" name="certificate" class="form-control"
                                                            accept="image/*,.pdf">
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                            </div> <!-- End table-responsive -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    @endsection

    {{-- <script>
        function openStatusModal(userId, currentStatus, certificate) {
            document.getElementById('modal_user_id').value = userId;
            document.getElementById('modal_status').value = currentStatus;


            let preview = document.getElementById('certificate_preview');

            if (certificate) {
                let fileUrl = "/uploads/certificates/" + certificate;

                // check image or pdf
                if (certificate.match(/\.(jpg|jpeg|png)$/i)) {
                    preview.innerHTML = `<img src="${fileUrl}" width="100" style="border-radius:5px;">`;
                } else {
                    preview.innerHTML = `<a href="${fileUrl}" target="_blank">View Certificate</a>`;
                }
            } else {
                preview.innerHTML = "No certificate uploaded";
            }
        }
    </script> --}}
