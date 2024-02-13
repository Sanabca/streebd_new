<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = view('admin.product.product-button', ['data' => $row]);
                    return $actionBtn;
                })
                ->editColumn('created_at', function ($data) {
                    return \Carbon\Carbon::parse($data->created_at)->isoFormat('DD/MM/YYYY');
                })
                ->rawColumns(['action'])
                ->make(true);
            }
        return view('admin.product.product-index');
    }

    public function save(Request $request){

        $productId = $request->product_id ?? NULL;
        if (!empty($productId)) {
            $request->validate([
                'product_name'     =>  'required|string|unique:products,product_name,'.$productId,
                'product_description' => 'nullable|min:10|string',
                // 'role_type' => 'required|min:3|string',
            ]);
            $message = "Product Updated Successfully";
        } else {
            $request->validate([
                'product_name'     =>  'required|string|unique:products,product_name',
                'product_description' => 'nullable|min:10|string',
            ]);
            $message = "Product Created Successfully";
        }
        try {
            $Product = $request->all();
            $isEffected = Product::updateOrCreate(['id'=>$productId],$Product);
            return $this->responseJson(true,200,$message,$isEffected);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }


    }

    public function getEdit(Request $request)
    {
        // re
        $productDetails=Product::where('uuid',$request->uuid)->first();
        // return $productDetails;
        $view = View::make('admin.product.product-add-edit', ['data' => $productDetails]);
        $renderedView = $view->render();
        return $this->responseJson(true,200,"dsd",['html_view'=>$renderedView]);
    }

    public function deleteRecord(Request $request)
    {
        // re
        $productDetails=Product::where('uuid',$request->uuid)->first();
        // return $productDetails;
        $message ="Product Not Found";
        
        try {
            if ($productDetails){
                $status=$productDetails->delete();
                $message ="Product Deleted  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }

    }
    public function updateStatus(Request $request)
    {
        $productDetails=Product::where('uuid',$request->uuid)->first();
        // return $productDetails;
        $message ="Product Not Found";
        
        try {
            if ($productDetails){
                $status=$productDetails->update(['status'=>$request->value]);
                $message ="Product Deleted  Successfully"; 
            }
            
            return $this->responseJson(true,200,$message);
          
        } catch (\Exception $ex) {
            throw new HttpResponseException($this->responseJson(false,400,$message));
        }
    }
}
