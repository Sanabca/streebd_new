@extends('admin.layouts.main')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet">

@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="m-0 font-weight-bold text-primary">User</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary btn-sm addUser"data-toggle="modal" data-action="add"
                            data-target="#addEditUserModal">Add User</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered card-table data-table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile Number</th> 
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


    <div class="modal" id="addEditUserModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">User : <span class="action_name"></span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('admin.user.save') }}" class="formsubmit" method="POST">
                    @csrf()
                    <div class="form-section">
                        @include('admin.user.user-add-edit')
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

    <script type="text/javascript">
        $(function() {
            var i = 1;
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.user.list') }}",
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    
                    {
                        data: 'mobile_number',
                        name: 'mobile_number'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'password',
                        name: 'password'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>
    <script>
        $(document).ready(function(e) {
            $(".card-header").on("click", ".addUser", function(e) {
                // $("#addEditUserModal").modal('show');
                $("#addEditUserModal").find('.action_name').html('Add');
            })
        });
    </script>



@endpush
