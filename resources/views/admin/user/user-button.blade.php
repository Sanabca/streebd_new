<div>

     <button type="button" data-table="users" data-form-modal="addEditUserModal"
        data-message="inactive" data-uuid="{{ $data->uuid }}" data-action="{{route('admin.user.edit',[$data->id])}}"
        class="btn btn-edit btn-sm editData" data-bs-toggle="tooltip"
        data-bs-placement="top" title="Edit">
        <i class="fas fa-edit"></i>
    </button>
    <button type="button" data-table="users" data-message="inactive"
        data-uuid="{{ $data->uuid }}" class="btn btn-delete btn-sm deleteData"  data-action="{{route('admin.user.delete',[$data->id])}}"
        data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
        <i class="fas fa-trash-alt"></i>
    </button>
    <button type="button" data-table="users" data-uuid="{{ $data->uuid }}" data-action="{{route('admin.user.status',[$data->id])}}"
        @if ($data->status == 'active') data-value="inactive" data-message="Inactive"  @else data-value="active" data-message="Active" @endif
        class="btn btn-edit btn-sm changeStatus"><i
            class="fas  @if ($data->status == 'active') fa-toggle-on  @else fa-toggle-off @endif"
            @if ($data->status == 'active') title="Active"  @else title="Inactive" @endif
            data-bs-toggle="tooltip"></i>
    </button>
   
</div>   