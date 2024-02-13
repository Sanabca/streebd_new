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
                        <h6 class="m-0 font-weight-bold text-primary">Product</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary btn-sm addProduct"data-toggle="modal" data-action="add"
                            data-target="#addEditProductModal">Add Product</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered card-table data-table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Name</th>
                                {{-- <th>Description</th> --}}
                                <th>Created At</th>
                                <th>Status</th>
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


    <div class="modal" id="addEditProductModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Product : <span class="action_name"></span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('admin.product.save') }}" class="formsubmit" method="POST">
                    @csrf()
                    <div class="form-section">
                        @include('admin.product.product-add-edit')
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
                ajax: "{{ route('admin.product.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },

                    {
                        data: 'product_name',
                        name: 'product_name'
                    },
                    
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'status',
                        name: 'status'
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
            $(".card-header").on("click", ".addProduct", function(e) {
                // $("#addEditProductModal").modal('show');
                $("#addEditProductModal").find('.action_name').html('Add');
            })
        });
    </script>



@endpush
