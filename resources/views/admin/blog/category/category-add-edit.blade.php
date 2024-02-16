    @if (!empty($data))
    <input type="hidden" name="category_id" 
    value="{{$data->id}}"
    class="form-control" id="category_id">
    @endif 
    <!-- Modal body -->
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" name="category_name" @if (!empty($data))
                        value="{{$data->category_name}}"
                    @endif class="form-control" id="category_name"
                        placeholder="Tech,Fincial">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="category_description">Category Description</label>
                    <textarea class="form-control" id="category_description" name="category_description" rows="3">@if (!empty($data)){{$data->category_description}}@endif</textarea>
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

