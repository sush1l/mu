<?php

namespace App\Http\Controllers;

use App\ex_employee;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EXEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return exemployee[]|Collection|Response
     */
    public function index()
    {
        $ex_employees  =   ex_employee::all();
        return view('user.backend.exemployee.exemployee_add.exemployee_list',compact(['ex_employees']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        
       $ex_employees  =   ex_employee::all();
       return view('user.backend.exemployee.exemployee_add.exemployee',compact(['ex_employees'
       ]));
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
            'name'  =>  'required',
            'photo' =>  'required   |   mimes:jpg,jpeg,png',
            'level' =>  'nullable',
            'designation'    =>  'required',
            'department' =>  'nullable',
            'phone' =>  'nullable   |   numeric | min:8',
            'email' =>  'nullable   |   email',
            'address'   =>  'nullable',
            'position'  =>  'required',
            'date' => 'required',
            'lastdate' => 'required',
            'status'    =>  'required'
        ]);
        //File Storage
        $OriginalFileName = $request->file('photo')->getClientOriginalName();
        $ext = $request->FILE('photo')->getClientOriginalExtension();
        $FileNameToStore = 'exemployee'.time().'.'.$ext;
        $path = $request->file('photo')->storeAs('public/assets/exemployee',$FileNameToStore);
        //store in db
        $store = new ex_employee;
        $store->name    =   $request->name;
        $store->photo    =   $FileNameToStore;
        $store->level    =   $request->level;
        $store->designation    =   $request->designation;
        $store->department    =   $request->department;
        $store->phone    =   $request->phone;
        $store->email    =   $request->email;
        $store->address    =   $request->address;
        $store->position    =   $request->position;
        $store->date    =   $request->date;
        $store->lastdate    =   $request->lastdate;
        $store->status    =   $request->status;
        $store->save();
        session()->flash('status', 'Data stored successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param employee $employee
     * @return void
     */
    public function show(exemployee $exemployee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ex_employee $Ex_employee
     * @return Ex_employee
     */
    public function edit(ex_employee $ex_employee)
    {
       
        
        return view('user.backend.exemployee.exemployee_update.exemployeeedit',compact(['ex_employee'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Ex_employee $Ex_employee
     * @return RedirectResponse
     */
    public function update(Request $request, ex_employee $ex_employee)
    {
        $request->validate([
            'name'  =>  'required',
            'photo' =>  'nullable   |   mimes:jpg,jpeg,png',
            'level' =>  'nullable',
            'designation'    =>  'required',
            'department' =>  'nullable',
            'phone' =>  'nullable   |   numeric | min:8',
            'email' =>  'nullable   |   email',
            'address'   =>  'nullable',
            'position'  =>  'required',
            'date'  =>  'required',
            'lastdate'  =>  'required',
            'status'    =>  'required'
        ]);
        //File Storage
        $path = 'storage/assets/exemployee/';
        //store in db
      
        $ex_employee->name    =   $request->name;
        if ($request->hasFile('photo')) {
            $ext_file = $path.$Ex_employee->photo;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('photo')->getClientOriginalExtension();
            $FileNameToStore = 'exemployee' . time() . '.' . $ext;
            $path = $request->file('photo')->storeAs('public/assets/exemployee', $FileNameToStore);
            $ex_employee->photo    =   $FileNameToStore;
        }
        $ex_employee->level    =   $request->level;
        $ex_employee->designation    =   $request->designation;
        $ex_employee->department    =   $request->department;
        $ex_employee->phone    =   $request->phone;
        $ex_employee->email    =   $request->email;
        $ex_employee->address    =   $request->address;
        $ex_employee->position    =   $request->position;
        $ex_employee->position    =   $request->position;
        $ex_employee->date    =   $request->date;
        $ex_employee->lastdate    =   $request->lastdate;
        $ex_employee->status    =   $request->status;
        $ex_employee->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param exemployee $exemployee
     * @return RedirectResponse
     */
    public function destroy(ex_employee $ex_employee)
    {
        $path = 'storage/assets/exemployee/';
        $ext_file = $path.$ex_employee->photo;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $ex_employee->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
