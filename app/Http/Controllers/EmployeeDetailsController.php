<?php

namespace App\Http\Controllers;

use App\Models\EmplyoeeDetails;
use Illuminate\Http\Request;
use DB;

class EmployeeDetailsController extends Controller
{
    public $employeeDetails,$image,$imageName,$driectory,$imageUrl;
    public function addEmployeeDetails(){
        return view('admin.emplyoeeDetails.add-emplyoeeDetails');
    }
    public function saveEmployeeDetails(Request $request){
        $this->employeeDetails=new EmplyoeeDetails();
        $this->employeeDetails->employee_id=$request->employee_id;
        $this->employeeDetails->emplyoee_address=$request->emplyoee_address;
        $this->employeeDetails->employee_image=$this->saveImage($request);
        $this->employeeDetails->save();
        return back()->with('message','Emplyoee Details Add Successfully');
    }
    private function saveImage($request){
        $this->image=$request->file('employee_image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->driectory='adminAsset/emplyoeeDetails-image/';
        $this->imageUrl=$this->driectory.$this->imageName;
        $this->image->move($this->driectory,$this->imageName);
        return $this->imageUrl;
    }
    public function manageEmployeeDetails(){
//        $this->employeeDetails=DB::table('emplyoee_details')
//            ->join('emplyoees','emplyoee_details.employee_id','emplyoees.id')
//            ->select('emplyoee_details.*','emplyoees.full_name')
//            ->get();
        return view('admin.emplyoeeDetails.manage-emplyoeeDetails',[
            'emplyoeeDetails'=>EmplyoeeDetails::all()
        ]);
    }
    public function editEmployeeDetails($id){
        return view('admin.emplyoeeDetails.edit-emplyoeeDetails',[
            'emplyoeeDetails'=>EmplyoeeDetails::find($id)
        ]);
    }
    public function updateEmployeeDetails(Request $request){
        $this->employeeDetails=EmplyoeeDetails::find($request->employee_id);
        $this->employeeDetails->employee_id=$request->employee_id;
        $this->employeeDetails->emplyoee_address=$request->emplyoee_address;
        $this->employeeDetails->employee_image=$this->saveImage($request);
        $this->employeeDetails->save();
        return redirect('/manage-employeeDetails');
    }
    public function deleteEmployeeDetails(Request $request){
        $this->employeeDetails=EmplyoeeDetails::find($request->employee_id);
        if ($this->employeeDetails->employee_image){
            unlink($this->employeeDetails->employee_image);
        }
        $this->employeeDetails->delete();
        return back();
    }
}
