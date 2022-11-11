<?php

namespace App\Http\Controllers;

use App\Models\Emplyoee;
use Illuminate\Http\Request;
use Session;

class EmployeeController extends Controller
{
    public $exPassword,$employee;
    public function addEmployee(){
        return view('admin.employee.add-employee');
    }
    public function saveEmployee(Request $request){
        $this->employee=new Emplyoee();
        $this->employee->first_name=$request->first_name;
        $this->employee->full_name=$request->full_name;
        $this->employee->email=$request->email;
        $this->employee->password=bcrypt($request->password);
        $this->employee->save();
        return back()->with('message','Employee Add Successfully');
    }
    public function manageEmployee(){
        return view('admin.employee.manage-employee',[
            'employees'=>Emplyoee::all()
        ]);
    }
    public function status($id){
        $this->employee=Emplyoee::find($id);
        if ($this->employee->status==1){
            $this->employee->status=0;
            $this->employee->save();
            return back();
        }else{
            $this->employee->status=1;
            $this->employee->save();
            return back();
        }
    }
    public function editEmployee($id){
        return view('admin.employee.edit-employee',[
            'employee'=>Emplyoee::find($id)
        ]);
    }
    public function updateEmployee(Request $request){
        $this->employee=Emplyoee::find($request->employee_id);
        $this->employee->first_name=$request->first_name;
        $this->employee->full_name=$request->full_name;
        $this->employee->email=$request->email;
        $this->employee->password=bcrypt($request->password);
        $this->employee->save();
        return redirect('/manage-employee');
    }
    public function deleteEmployee(Request $request){
        $this->employee=Emplyoee::find($request->employee_id);
        $this->employee->delete();
        return back();
    }
    public function emplyoeeLogin(Request $request){
        $this->employee=Emplyoee::where('email',$request->user_name)
            ->first();
        if ($this->employee){
            $this->exPassword=$this->employee->password;
            if (password_verify($request->password,$this->exPassword)){
                Session::put('EmplyoeeId',$this->employee->id);
                Session::put('EmplyoeeName',$this->employee->full_name);
                Session::put('EmplyoeeDate',date('Y-m-d H:i:s'));
                return redirect('/');
            }else{
                return back()->with('message','Please use Valid password');
            }
        }else{
            return back()->with('message','Please use Valid email address');
        }
    }
}
