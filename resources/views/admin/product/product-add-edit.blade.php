
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
                    <label for="product_description">Product Description</label>
                    <textarea class="form-control" id="product_description" name="product_description" rows="3">@if (!empty($data)){{$data->product_description}}@endif</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <!-- <div class="form-group">
                    <label class="bmd-label-floating">Image</label>
                    <input type="file" autofocus class="form-control" readonly name="file" id="file" accept="image/*" onchange="validateimg(this)" required>
                    <div id="image_preview_section">
                        <img id="user_img" height="130" width="130" style="border:solid" />
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="product_image">Product Image</label>
                    <input type="file" name="product_image" @if (!empty($data))
                        value="{{$data->product_image}}"
                    @endif class="form-control" id="product_image">
                    <div id="image_preview_section">
                        <img id="user_img" height="130" width="130" style="border:solid" />
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

