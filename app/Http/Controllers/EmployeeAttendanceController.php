<?php

namespace App\Http\Controllers;

use App\Models\Emplyoee;
use Illuminate\Http\Request;

class EmployeeAttendanceController extends Controller
{
    public $employeeAttendance;
    public function employeeAttendance(){
        return view('admin.emplyoeeAttendance.emplyoeeAtendance',[
            'emplyoee'=>Emplyoee::all()
        ]);
    }
    public function editEmployeeAttendance($id){
            return view('admin.emplyoeeAttendance.edit-emplyoeeAttendance',[
                'emplyoee'=>Emplyoee::find($id)
            ]);
    }
    public function updateAttendance(Request $request){
        $this->employeeAttendance=Emplyoee::find($request->emplyoee_id);
         return redirect('/employeeAttendance');
    }
    public function deleteAttendance(Request $request){
        $this->employeeAttendance=Emplyoee::find($request->emplyoee_id);
        $this->employeeAttendance->delete();
        return back();
    }

}
