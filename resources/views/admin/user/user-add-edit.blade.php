
@if (!empty($data))
    <input type="hidden" name="user_id" 
    value="{{$data->id}}"
    class="form-control" id="user_id">
    @endif 
    <!-- Modal body -->
    <div class="modal-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" @if (!empty($data))
                        value="{{$data->name}}"
                    @endif class="form-control" id="name">
                </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group">
                    <label for="mobile_number">User Mobile No</label>
                    <input type="text" name="mobile_number" @if (!empty($data))
                        value="{{$data->mobile_number}}"
                    @endif class="form-control" id="mobile_number">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="text" name="email" @if (!empty($data))
                        value="{{$data->email}}"
                    @endif class="form-control" id="email">
                </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" @if (!empty($data))
                        value="{{$data->username}}"
                    @endif class="form-control" id="username">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" @if (!empty($data))
                        value="{{$data->password}}"
                    @endif class="form-control" id="password">
                </div>
            </div>
            <div class="col-lg-6">
            <!-- <div class="form-group">
                    <label for="c_password">Confirm Password</label>
                    <input type="text" name="c_password" @if (!empty($data))
                        value="{{$data->c_password}}"
                    @endif class="form-control" id="c_password">
                </div>
            </div> -->
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

