<?php

namespace App\Http\Controllers;
use App\Models\CustomerDetail;

use Illuminate\Http\Request;

class CustomerAdd extends Controller
{
    //
    public function open() 
    {
        return view('customeradd');
    }
    public function addcustomer(Request $req)
    {
        $req->validate([
            'name'=>'required | max:20',
            'mobile'=>'required | min:10',
            'email'=>'required | max:100',
            'address'=>'required | max:100',
            'state'=>'required | max:20',
            'pincode'=>'required | max:6',
            'gender'=>'required',
            'status'=>'required'
              
        ]);
        
        $customerdetail= new CustomerDetail;
        $customerdetail->customer_name=$req->name;
        $customerdetail->customer_mobile=$req->mobile;
        $customerdetail->customer_email=$req->email;
        $customerdetail->customer_address=$req->address;
        $customerdetail->customer_state=$req->state;
        $customerdetail->customer_pincode=$req->pincode;
        $customerdetail->customer_gender=$req->gender;
        $customerdetail->customer_marital_status=$req->status;
        
        if($customerdetail->save()){
            echo"<script>alert('Inserted Sucessfully');
            window.location.href='http://127.0.0.1:8000/add';
            </script>";
            
        }
        else{
            echo"<script>alert('Insert Failed')</script>";
        }




    }
    public function tabledata(Request $reqest)
    {
        $data= CustomerDetail::all();
        return view('customertable_date',['customerdetails'=>$data]);
    }
    public function delete($customer_id)
    {
        $data= CustomerDetail::find($customer_id);
        $data->delete();
        return redirect('table');
    }
    public function getvalue($customer_id)
    {
        $data =CustomerDetail::find($customer_id);
        return view('updatecustomer',['data'=>$data]);

    }
    public function update(Request $reqs)
    {
        $customerdetail= CustomerDetail::find($reqs->customer_id);
        $customerdetail->customer_name=$reqs->name;
        $customerdetail->customer_mobile=$reqs->mobile;
        $customerdetail->customer_email=$reqs->email;
        $customerdetail->customer_address=$reqs->address;
        $customerdetail->customer_state=$reqs->state;
        $customerdetail->customer_pincode=$reqs->pincode;
        $customerdetail->customer_gender=$reqs->gender;
        $customerdetail->customer_marital_status=$reqs->status;
        
        if($customerdetail->save()){
            echo"<script>alert('Updated Sucessfully');
            window.location.href='http://127.0.0.1:8000/table';
            </script>";
            
        }
        else{
            echo"<script>alert('Update Failed')</script>";
        }
    }


}
