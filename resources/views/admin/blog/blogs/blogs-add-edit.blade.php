@extends('admin.layouts.main')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet">

@endpush
@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary">Blogs : Create</h6>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{route('admin.blog.blogs.list')}}" class="btn btn-primary btn-sm addCategory" >Blog List</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.blog.blogs.save') }}" class="formsubmit fileupload" id="blog_form" method="POST" enctype="multipart/form-data" >
                @csrf()
                <!-- Modal body -->
                @if (!empty(@$blog))
                <input type="hidden" name="blog_id" 
                value="{{$blog->id}}"
                class="form-control" id="blog_id">
                @endif 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="blog_category_id">Category Name</label>
                            <select class="form-control" name="blog_category_id" id="blog_category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tags">Blog Tags</label>
                            <select id="tags" class="form-control" name="tags[]" multiple>
                                <!-- Your options here -->
                                @if (@$blog && $blog->tags)
                                    @php
                                        $tags = json_decode($blog->tags);
                                    @endphp
                                    @foreach ($tags as $tag)
                                            <option  selected value="{{$tag}}">{{$tag}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  @if (@$blog) value="{{$blog->title}}" @endif placeholder="Enter Title" name="title" id="title" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="slug">Blog Slug</label>
                            <input type="text" class="form-control" @if (@$blog) value="{{$blog->slug}}" @endif  placeholder="Enter Slug" name="slug" id="slug" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="blog_image">Blog Image</label>
                            <input type="file" autofocus class="form-control" readonly name="blog_image"
                            id="blog_image" accept="image/*" onchange="validateimg(this)" required>
                            
                            <div id="image_preview_section">
                                @if (@$blog)
                                <img id="user_img" src="{{$blog->getFirstMediaUrl('blog_image', 'thumb')}}" height="130" width="130" style="border:solid" class="image">
                                @else
                                <img id="user_img" height="130" width="130" style="border:solid" />
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image_alt_text">Image Alt Text</label>
                            <input type="text" class="form-control" @if (@$blog) value="{{$blog->image_alt_text}}" @endif  placeholder="Enter Image Alt Text" name="image_alt_text" id="image_alt_text" />
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">@if(@$blog){{$blog->description}}@endif</textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <h5>Meta Informations </h5>
                <div class="row">  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" class="form-control"  @if (@$blog) value="{{$blog->meta_title}}" @endif placeholder="Enter meta title" name="meta_title" id="meta_title" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" class="form-control"  @if (@$blog) value="{{$blog->meta_keywords}}" @endif placeholder="Enter meta Keywords" name="meta_keywords" id="meta_keywords" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="3">@if(@$blog){{$blog->meta_description}}@endif</textarea>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="">
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

<script>
    $(document).ready(function (e) {
        $('#title').on('blur', function () {
            var title = $("#title").val();
            $("#slug").val(slugify(title));
        });
        $('#slug').on('blur', function () {
            var slug = $("#slug").val();
            $("#slug").val(slugify(slug));
        });
        $("#tags").select2({
            placeholder: "Enter the tags",
            containerCssClass: ':all:',
            tags: true,
            tokenSeparators: [',', ' ']
        });
    }); 
</script>

  <script>
     var imageUrl = "{{route('admin.blog.blogs.upload-image')}}"
    new FroalaEditor('#description', {
      // Set the image upload parameter.
      imageUploadParam: 'file',
  
      // Set the image upload URL.
      imageUploadURL: imageUrl,
  
      // Additional upload params.
      imageUploadParams: {id: 'my_editor'},
  
      // Set request type.
      imageUploadMethod: 'POST',
  
      // Set max image size to 5MB.
      imageMaxSize: 5 * 1024 * 1024,
  
      // Allow to upload PNG and JPG.
      imageAllowedTypes: ['jpeg', 'jpg', 'png'],
        // Set the load images request type.
        imageManagerLoadMethod: "GET",
      events: {
        'image.beforeUpload': function (images) {
          // Return false if you want to stop the image upload.
          console.log(images);
        },
        'image.uploaded': function (response) {
          // Image was uploaded to the server.
          console.log(response);
        },
        'image.inserted': function ($img, response) {
          // Image was inserted in the editor.
          console.log($img,response);
        },
        'image.replaced': function ($img, response) {
          // Image was replaced in the editor.
        },
        'image.error': function (error, response) {
          // Bad link.
          if (error.code == 1) {  }
  
          // No link in upload response.
          else if (error.code == 2) {  }
  
          // Error during image upload.
          else if (error.code == 3) {  }
  
          // Parsing response failed.
          else if (error.code == 4) {  }
  
          // Image too text-large.
          else if (error.code == 5) {  }
  
          // Invalid image type.
          else if (error.code == 6) {  }
  
          // Image can be uploaded only to same domain in IE 8 and IE 9.
          else if (error.code == 7) {  }
  
          // Response contains the original server response to the request if available.
        }
      }
    })
</script>
<script>
    function validateimg(ctrl) {
        console.log(ctrl);
        var fileUpload = ctrl;
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.PNG|.JPG|.jpeg|.png)$");
        if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof(fileUpload.files) != "undefined") {
                var reader = new FileReader();
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function(e) {
                    var image = new Image();
                    image.src = e.target.result;
                    image.onload = function() {
                        var height = this.height;
                        var width = this.width;
                        // if (height < 500 || width < 500) {
                        //     alert("At least you can upload a 500*500 photo size.");
                        //     return false;
                        // } else {
                            // alert("Uploaded image has valid Height and Width.");
                            var validExtensions = ['jpg', 'png', 'jpeg', 'PNG',
                                'JPG'
                            ]; //array of valid extensions
                            var fileName = fileUpload.files[0].name;
                            var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                            if ($.inArray(fileNameExt, validExtensions) == -1) {
                                fileUpload.type = ''
                                fileUpload.type = 'file'
                                $('#user_img').attr('src', "");
                                // fileUpload.val()
                                alert("Only these file types are accepted : " + validExtensions.join(', '));
                            } else {
                                if (fileUpload.files || fileUpload.files[0]) {
                                    var filerdr = new FileReader();
                                    filerdr.onload = function(e) {
                                        $('#user_img').attr('src', e.target.result);
                                    }
                                    filerdr.readAsDataURL(fileUpload.files[0]);
                                }
                            // }
                            // return true;
                        }
                    };
                }
            } else {
                alert("This browser does not support HTML5.");
                return false;
            }
        } else {
            alert("Please select a valid Image file.");
            return false;
        }
    }
</script>
@endpush
