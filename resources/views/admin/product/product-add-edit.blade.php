
@if (!empty($data))
    <input type="hidden" name="product_id" 
    value="{{$data->id}}"
    class="form-control" id="product_id">
    @endif 
    <!-- Modal body -->
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" @if (!empty($data))
                        value="{{$data->product_name}}"
                    @endif class="form-control" id="product_name"
                        placeholder="Bags, Towels">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" name="brand" @if (!empty($data))
                        value="{{$data->brand}}"
                    @endif class="form-control" id="brand">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" @if (!empty($data))
                        value="{{$data->type}}"
                    @endif class="form-control" id="brand">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                        <!-- <label class="bmd-label-floating">Quantity<span style="color:red;">*</span></label>
                        <input type="text" autofocus class="form-control" onchange="calAmount()" value="" name="quantity" id="quantity" required>
                        <p class="invalid-feedback" id="quantity_error"></p> -->




                    <label for="quantity">Quantity<span style="color:red;">*</span></label>
                    <input type="text" name="quantity" @if (!empty($data))
                        value="{{$data->quantity}}"
                    @endif class="form-control" onchange="calAmount()" id="quantity" required>
                    <p class="invalid-feedback" id="quantity_error"></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" @if (!empty($data))
                        value="{{$data->price}}"
                    @endif class="form-control" id="price">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" @if (!empty($data))
                        value="{{$data->amount}}"
                    @endif class="form-control" id="amount">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="product_image">Product Image</label>
                    <input type="file" name="product_image" @if (!empty($data))
                        value="{{$data->product_image}}"
                    @endif class="form-control" id="product_image" accept="image/*" onchange="validateimg(this)" required>
                    <div id="image_preview_section">
                        @if (@$data)
                        <img id="user_img" src="{{$data->getFirstMediaUrl('product_image', 'thumb')}}" height="130" width="130" style="border:solid" class="image">
                        @else
                        <img id="user_img" height="130" width="130" style="border:solid" />
                        @endif
                    </div>
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

    <!-- for js -->
    @push('js')
    @section('js')
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    function validateimg(ctrl) {
        console.log(ctrl);
        var fileUpload = ctrl;
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.PNG|.JPG|.jpeg|.png|.webp)$");
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
                            var validExtensions = ['jpg', 'png', 'jpeg', 'PNG', 'webp',
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

    function calAmount() {
        var qty = $("#quantity").val();
        var price = $("#price").val();
        var amount = Number(qty) * Number(price);
        $("#amount").val(amount);
    }
</script>
@endsection
@endpush


