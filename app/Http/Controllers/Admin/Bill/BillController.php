<?php

namespace App\Http\Controllers\Admin\Bill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bill;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;

class BillController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Bill::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = view('admin.bill.bill-button', ['data' => $row]);
                    return $actionBtn;
                })
                ->editColumn('created_at', function ($data) {
                    return \Carbon\Carbon::parse($data->created_at)->isoFormat('DD/MM/YYYY');
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        return view('admin.bill.bill-index');
    }

    public function save(Request $request)
    {
        $billId = $request->bill_id ?? NULL;
        if (!empty($billId)) {
            $request->validate([
                'receiver_name'     =>  'required|string|unique:bills,receiver_name,'.$billId,
                'mobile_number' => 'nullable|min:10|string',
                'date' => 'nullable|string',
                'bill_address' => 'nullable|string',
                'note' => 'nullable|string',
            ]);
            $message = "Bill Updated Successfully";
        } else {
            $request->validate([
                'receiver_name'     =>  'required|string|unique:bills,receiver_name,'.$billId,
                'mobile_number' => 'nullable|min:10|string',
                'date' => 'nullable|string',
                'bill_address' => 'nullable|string',
                'note' => 'nullable|string',
            ]);
            $message = "Bill Created Successfully";
        }
        try {
            $bill = $request->all();
            $isEffected = Bill::updateOrCreate(['id'=>$billId],$bill);
            return $this->responseJson(true,200,$message,$isEffected);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }

    }

    // public function getEdit(Request $request)
    // {
    //     // re
    //     $categoryDetails=BlogCategory::where('uuid',$request->uuid)->first();
    //     // return $categoryDetails;
    //     $view = View::make('admin.blog.category.category-add-edit', ['data' => $categoryDetails]);
    //     $renderedView = $view->render();
    //     return $this->responseJson(true,200,"dsd",['html_view'=>$renderedView]);
    // }

    // public function deleteRecord(Request $request)
    // {
    //     // re
    //     $categoryDetails=BlogCategory::where('uuid',$request->uuid)->first();
    //     // return $categoryDetails;
    //     $message ="Blog Category Not Found";
        
    //     try {
    //         if ($categoryDetails){
    //             $status=$categoryDetails->delete();
    //             $message ="Blog Category Deleted  Successfully"; 
    //         }
            
    //         return $this->responseJson(true,200,$message);
          
    //     } catch (\Exception $ex) {
    //         throw new HttpResponseException($this->responseJson(false,400,$message));
    //     }

    // }
    
    // public function updateStatus(Request $request)
    // {
    //     $categoryDetails=BlogCategory::where('uuid',$request->uuid)->first();
    //     // return $categoryDetails;
    //     $message ="Blog Category Not Found";
        
    //     try {
    //         if ($categoryDetails){
    //             $status=$categoryDetails->update(['status'=>$request->value]);
    //             $message ="Blog Category Updated  Successfully"; 
    //         }
            
    //         return $this->responseJson(true,200,$message);
          
    //     } catch (\Exception $ex) {
    //         throw new HttpResponseException($this->responseJson(false,400,$message));
    //     }
    // }
}
