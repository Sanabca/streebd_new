<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = UserDetail::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = view('admin.user.user-button', ['data' => $row]);
                    return $actionBtn;
                })
                ->editColumn('created_at', function ($data) {
                    return \Carbon\Carbon::parse($data->created_at)->isoFormat('DD/MM/YYYY');
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        return view('admin.user.user-index');
    }

    public function save(Request $request){

        $userId = $request->user_id ?? NULL;
        if (!empty($userId)) {
            $request->validate([
                'name'   =>  'required|string,'.$userId,
                'mobile_number'     =>  'nullable',
                'email'     =>  'nullable,',
                'username'     =>  'nullable',
                'password'     =>  'nullable',
        
            ]);
            $message = "User Updated Successfully";
        } else {
            $request->validate([
                'name'     =>  'required|string',
                'mobile_number' => 'nullable',
                'email'     =>  'nullable',
                'username'     =>  'nullable',
                'password'     =>  'nullable',

            ]);
            $message = "User Created Successfully";
        }
            // $User = $request->all();
              
            // $isEffected = UserDetail::updateOrCreate(['id'=>$userId],$User);
            // $redirectUrl = route('admin.user.list');
            // return $this->responseJson(true,200,$message,$isEffected);



        try {
            $User = $request->all();
            $isEffected = UserDetail::updateOrCreate(['id'=>$userId],$User);
            return $this->responseJson(true,200,$message,$isEffected);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }


    }

    public function getEdit(Request $request)
    {
        // re
        $userDetails=UserDetail::where('uuid',$request->uuid)->first();
        // return $userDetails;
        $view = View::make('admin.user.user-add-edit', ['data' => $userDetails]);
        $renderedView = $view->render();
        return $this->responseJson(true,200,"dsd",['html_view'=>$renderedView]);
    }

    public function deleteRecord(Request $request)
    {
        // re
        $userDetails=UserDetail::where('uuid',$request->uuid)->first();
        // return $userDetails;
        $message ="User Not Found";
        
        try {
            if ($userDetails){
                $status=$userDetails->delete();
                $message ="User Deleted  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }

    }
    public function updateStatus(Request $request)
    {
        $userDetails=UserDetail::where('uuid',$request->uuid)->first();
        // return $userDetails;
        $message ="User Not Found";
        
        try {
            if ($userDetails){
                $status=$userDetails->update(['status'=>$request->value]);
                $message ="User status updated  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }
    }
}


