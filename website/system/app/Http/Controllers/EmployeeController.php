<?php

namespace App\Http\Controllers;

use App\employee;
use App\designation;
use App\department;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return employee[]|Collection|Response
     */
    public function index()
    {
        $employees  =   employee::all();
        return view('user.backend.employee.employee_add.employee_list',compact(['employees']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        
        $designations = designation::all();
        $departments = department::all();
       return view('user.backend.employee.employee_add.employee',compact(['designations',
       'departments',]));
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
            'designation_id'    =>  'required',
            'department_id' =>  'nullable',
            'phone' =>  'nullable   |   numeric | min:8',
            'email' =>  'nullable   |   email',
            'address'   =>  'nullable',
            'position'  =>  'required',
            'status'    =>  'required'
        ]);
        //File Storage
        $OriginalFileName = $request->file('photo')->getClientOriginalName();
        $ext = $request->FILE('photo')->getClientOriginalExtension();
        $FileNameToStore = 'employee'.time().'.'.$ext;
        $path = $request->file('photo')->storeAs('public/assets/employee',$FileNameToStore);
        //store in db
        $store = new employee;
        $store->name    =   $request->name;
        $store->photo    =   $FileNameToStore;
        $store->level    =   $request->level;
        $store->designation_id    =   $request->designation_id;
        $store->department_id    =   $request->department_id;
        $store->phone    =   $request->phone;
        $store->email    =   $request->email;
        $store->address    =   $request->address;
        $store->position    =   $request->position;
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
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param employee $employee
     * @return employee
     */
    public function edit(employee $employee)
    {
         $designations = designation::all();
        $departments = department::all();
        return view('user.backend.employee.update.employee_update',compact(['employee','designations','departments']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param employee $employee
     * @return RedirectResponse
     */
    public function update(Request $request, employee $employee)
    {
        $request->validate([
            'name'  =>  'required',
            'photo' =>  'nullable   |   mimes:jpg,jpeg,png',
            'level' =>  'nullable',
            'designation_id'    =>  'required',
            'department_id' =>  'nullable',
            'phone' =>  'nullable   |   numeric | min:8',
            'email' =>  'nullable   |   email',
            'address'   =>  'nullable',
            'position'  =>  'required',
            'status'    =>  'required'
        ]);
        //File Storage
        $path = 'storage/assets/employee/';
        //store in db
      
        $employee->name    =   $request->name;
        if ($request->hasFile('photo')) {
            $ext_file = $path.$employee->photo;
            if(file_exists(public_path($ext_file))){
                unlink($ext_file);
            }
            $ext = $request->FILE('photo')->getClientOriginalExtension();
            $FileNameToStore = 'employee' . time() . '.' . $ext;
            $path = $request->file('photo')->storeAs('public/assets/employee', $FileNameToStore);
            $employee->photo    =   $FileNameToStore;
        }
        $employee->level    =   $request->level;
        $employee->designation_id    =   $request->designation_id;
        $employee->department_id    =   $request->department_id;
        $employee->phone    =   $request->phone;
        $employee->email    =   $request->email;
        $employee->address    =   $request->address;
        $employee->position    =   $request->position;
        $employee->status    =   $request->status;
        $employee->save();
        session()->flash('status', 'Data updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param employee $employee
     * @return RedirectResponse
     */
    public function destroy(employee $employee)
    {
        $path = 'storage/assets/employee/';
        $ext_file = $path.$employee->photo;
        if(file_exists(public_path($ext_file))){
            unlink($ext_file);
        }
        $employee->delete();
        session()->flash('status', 'Data deleted successfully!');
        return redirect()->back();
    }
}
