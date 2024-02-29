@if (!empty($data))
    <input type="hidden" name="order_id" 
    value="{{$data->id}}"
    class="form-control" id="order_id">
    @endif 
    <!-- Modal body -->
    <div class="modal-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="receiver_name">Receiver Name</label>
                    <input type="text" name="receiver_name" @if (!empty($data))
                        value="{{$data->receiver_name}}"
                    @endif class="form-control" id="receiver_name"
                        placeholder="Enter Receiver name">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="text" name="mobile_number" @if (!empty($data))
                        value="{{$data->mobile_number}}"
                    @endif class="form-control" id="mobile_number"
                        placeholder="Enter Mobile Number">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="admin">Admin</label>
                       <select name="admin" id="admin" class="form-control">
                       <option value="">Select Admin</option>
                        <option value="Admin">Admin</option>
                        <option value="Super Admin">Super Admin</option>
                       </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="date">Specify date</label>
                    <input type="date" name="date" @if (!empty($data))
                        value="{{$data->date}}"
                    @endif class="form-control" id="date"
                        placeholder="Enter date">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="bill_address">Billing Addreess</label>
                   <textarea name="bill_address" id="bill_address" cols="30" rows="5" class="form-control">@if (!empty($data)){{$data->bill_address}}@endif</textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="note">Note</label>
                    <input type="text" name="note" @if (!empty($data))
                        value="{{$data->note}}"
                    @endif class="form-control" id="note"
                        placeholder="Note">
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <label for="method">Method</label>
                    <select name="method" id="method" class="form-control">
                        <option value="">Select method</option>
                        <option value="Inside Dhaka">Inside Dhaka</option>
                        <option value="Sub Area Dhaka">Sub Area Dhaka</option>
                        <option value="Outside Dhaka">Outside Dhaka</option>
                        <option value="Free shipping">Free shipping</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="amount">Amount</label>
                    <select name="amount" id="amount" class="form-control">
                        <option value="">Select Amount</option>
                        <option value="80">80</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="0">0</option>
                    </select>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary mb-2">Save Bill</button>
            </div>
        </div>
    </div>

