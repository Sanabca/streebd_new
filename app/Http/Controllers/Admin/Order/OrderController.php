<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Order::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = view('admin.order.order-button', ['data' => $row]);
                    return $actionBtn;
                })
                ->editColumn('created_at', function ($data) {
                    return \Carbon\Carbon::parse($data->created_at)->isoFormat('DD/MM/YYYY');
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        return view('admin.order.order-index');
    }

    public function save(Request $request)
    {
        $orderId = $request->order_id ?? NULL;
        if (!empty($orderId)) {
            $request->validate([
                'receiver_name'     =>  'required|string|unique:orders,receiver_name,'.$orderId,
                'mobile_number' => 'nullable|min:10|string',
                'admin' => 'nullable|string',
                'date' => 'nullable|string',
                'bill_address' => 'nullable|string',
                'note' => 'nullable|string',
                'method' => 'nullable|string',
                'amount' => 'nullable|string',
            ]);
            $message = "Order Updated Successfully";
        } else {
            $request->validate([
                'receiver_name'     =>  'required|string|unique:orders,receiver_name,'.$orderId,
                'mobile_number' => 'nullable|min:10|string',
                'date' => 'nullable|string',
                'bill_address' => 'nullable|string',
                'note' => 'nullable|string',
            ]);
            $message = "Order Created Successfully";
        }
        try {
            $order = $request->all();
            $isEffected = Order::updateOrCreate(['id'=>$orderId],$order);
            return $this->responseJson(true,200,$message,$isEffected);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }

    }

    public function getEdit(Request $request)
    {
        // re
        $orderDetails=Order::where('uuid',$request->uuid)->first();
        // return $orderDetails;
        $view = View::make('admin.order.order-add-edit', ['data' => $orderDetails]);
        $renderedView = $view->render();
        return $this->responseJson(true,200,"dsd",['html_view'=>$renderedView]);
    }

    public function deleteRecord(Request $request)
    {
        // re
        $orderDetails=Order::where('uuid',$request->uuid)->first();
        // return $orderDetails;
        $message ="Order Not Found";
        
        try {
            if ($orderDetails){
                $status=$orderDetails->delete();
                $message ="Order Deleted  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }

    }
    
    public function updateStatus(Request $request)
    {
        $orderDetails=Order::where('uuid',$request->uuid)->first();
        // return $orderDetails;
        $message ="Order Not Found";
        
        try {
            if ($orderDetails){
                $status=$orderDetails->update(['status'=>$request->value]);
                $message ="Order Updated  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }
    }
}
