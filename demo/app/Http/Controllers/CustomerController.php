<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer =Customer::all();
        return view()->make('customers.index',['customers'=>$customer]);
    }
    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('customers.edit',['customers'=>$customer]);
    }
    public function add()
    {
        return view('customers.add');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('profilename')) {
            // dd("hello");
            $destinationPath = '/home/inex5/demo/public/images';
            $files = $request->file('profilename'); // will get all files
        
                $file_name = $files->getClientOriginalName(); //Get file original name
                // dd($file_name);
                $files->move($destinationPath , $file_name); // move files to destination folder
            
        }
        
        $customer = new Customer();
        $customer->firstname=$request->input('firstname');
        $customer->lastname=$request->input('lastname');
        $customer->address=$request->input('address');
        $customer->emailid=$request->input('emailname');
        $customer->username=$request->input('username');
        $customer->password=$request->input('password');
        $customer->phoneno=$request->input('phone');
        $customer->profilephoto=$file_name;
        $customer->save();

        



        // $file=$request->file('profilename');
        // dd($file);
        // // $file_name = $file->getClientOriginalName(); //Get file original name
        // // $imae_name=$request->input('profilename');
        // $file->move(public_path('images'),$file);
        return redirect()->route('customers.index');
    }
    public function update(Request $request)
    {
        if ($request->hasFile('profilename')) {
            // dd("hello");
            $destinationPath = '/home/inex5/demo/public/images';
            $files = $request->file('profilename'); // will get all files
        
                $file_name = $files->getClientOriginalName(); //Get file original name
                // dd($file_name);
                $files->move($destinationPath , $file_name); // move files to destination folder
            
        }
        
        $customer = Customer::find($request->input('id'));
        $customer->firstname=$request->input('firstname');
        $customer->lastname=$request->input('lastname');
        $customer->address=$request->input('address');
        $customer->emailid=$request->input('emailname');
        $customer->username=$request->input('username');
        $customer->phoneno=$request->input('phone');
        $cuscdtomer->profilephoto=$file_name;
        

        return redirect()->route('customers.index');
    }
    public function delete($id)
    {
        $customer=Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }

}
