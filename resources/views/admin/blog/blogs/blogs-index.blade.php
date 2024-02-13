@extends('admin.layouts.main')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

@endpush
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{route('admin.blog.blogs.create')}}" class="btn btn-primary btn-sm addCategory" >Add Blog</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered card-table data-table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SI</th>
                            <th>Title</th>
                            <th>Category Name</th>
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


<div class="modal" id="addEditCategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Category : <span class="action_name"></span></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="{{route('admin.blog.blogs.save')}}" class="formsubmit" method="POST">
                @csrf()
                <!-- Modal body -->
                <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="blog_category_id">Category Name</label>
                                    <select  class="form-control" name="blog_category_id" id="blog_category_id">
                                        @foreach ($categories as  $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="category_description">Category Description</label>
                                    <textarea class="form-control" id="category_description" name="category_description" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">

    $(function() {
        var i = 1;
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.blog.blogs.list') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'title',
                    name: 'title'
                },
               
                {
                    data: 'category.category_name',
                    name: 'category.category_name'
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

@endpush