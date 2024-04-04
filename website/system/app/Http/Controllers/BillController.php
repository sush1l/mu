<?php

namespace App\Http\Controllers;

use App\bill;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return bill[]|Collection|Response
     */
    public function index()
    {
        $bill  =   bill::all();
        return view('user.backend.bill.billlist',compact(['bill']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $bill = bill::all();
        return view('user.backend.bill.bill',compact(['bill']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'description'=>'nullable',
            'budget_no'=>'required',
            'expense_head'=>'required',
            'buying_process'=>'required',
            'pan_no'=>'required',
            'bill_date'=>'required',
            'cash'=>'required',
            'post_date'=>'required',
            'remarks'=>'nullable',
            'bill'  =>  'nullable | mimes:jpg,jpeg,png,pdf'
        ]);

        $store = new bill;
        $store->description =   $request->description;
        $store->budget_no   =   $request->budget_no;
        $store->expense_head    =   $request->expense_head;
        $store->buying_process  =   $request->buying_process;
        $store->pan_no  =   $request->pan_no;
        $store->bill_date   =   $request->bill_date;
        $store->cash    =   $request->cash;
        $store->post_date   =   $request->post_date;
        $store->remarks =   $request->remarks;
        if($request->hasFile('bill')) {
            $ext = $request->FILE('bill')->getClientOriginalExtension();
            $FileNameToStore = 'bill'.time().'.'.$ext;
            $request->file('bill')->storeAs('public/assets/bill',$FileNameToStore);
            $store->bill = $FileNameToStore;
        }
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param bill $bill
     * @return void
     */
    public function show(bill $bill)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param bill $bill
     * @return bill
     */
    public function edit(bill $bill)
    {
        return view('user.backend.bill.billedit',compact(['bill']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param bill $bill
     * @return RedirectResponse
     */
    public function update(Request $request, bill $bill)
    {
        $request->validate([
            'description'=>'nullable',
            'budget_no'=>'required',
            'expense_head'=>'required',
            'buying_process'=>'required',
            'pan_no'=>'required',
            'bill_date'=>'required',
            'cash'=>'required',
            'post_date'=>'required',
            'remarks'=>'nullable',
            'bill'  =>  'nullable | mimes:jpg,jpeg,png,pdf'
        ]);
        $path = 'storage/assets/bill/';
        $bill->description =   $request->description;
        $bill->budget_no   =   $request->budget_no;
        $bill->expense_head    =   $request->expense_head;
        $bill->buying_process  =   $request->buying_process;
        $bill->pan_no  =   $request->pan_no;
        $bill->bill_date   =   $request->bill_date;
        $bill->cash    =   $request->cash;
        $bill->post_date   =   $request->post_date;
        $bill->remarks =   $request->remarks;
        if($request->hasFile('bill')) {
            $ext_file = $path.$bill->bill;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('bill')->getClientOriginalExtension();
            $FileNameToStore = 'bill'.time().'.'.$ext;
            $request->file('bill')->storeAs('public/assets/bill',$FileNameToStore);
            $bill->bill = $FileNameToStore;
        }
        $bill->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param bill $bill
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(bill $bill)
    {
        $path = 'storage/assets/bill/';
        $ext_file = $path.$bill->bill;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $bill->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
