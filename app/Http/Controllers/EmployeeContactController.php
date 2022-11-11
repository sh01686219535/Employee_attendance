<?php

namespace App\Http\Controllers;

use App\Models\EmplyoeeContact;
use Illuminate\Http\Request;
use DB;

class EmployeeContactController extends Controller
{
    public $emplyoeeContact;
    public function addEmployeeContact(){
        return view('admin.emplyoeeContact.add-emplyoeeContact');
    }
    public function saveEmployeeContact(Request $request){
        $this->emplyoeeContact=new EmplyoeeContact();
        $this->emplyoeeContact->employee_id=$request->employee_id;
        $this->emplyoeeContact->contact_name=$request->contact_name;
        $this->emplyoeeContact->contact_email=$request->contact_email;
        $this->emplyoeeContact->save();
        return back()->with('message','EmplyoeeContact Add successfully');
    }
    public function manageEmployeeContact(){
//        $this->emplyoeeContact=DB::table('emplyoee_contacts')
//            ->join('emplyoees','emplyoee_contacts.employee_id','emplyoees.id')
//            ->select('emplyoee_contacts.*','emplyoees.full_name')
//            ->get();
        return view('admin.emplyoeeContact.manage-emplyoeeContact',[
            'emplyoeeContact'=>EmplyoeeContact::all()
        ]);
    }
    public function editEmployeeContact($id){
        return view('admin.emplyoeeContact.edit-emplyoeeContact',[
            'emplyoeeContact'=>EmplyoeeContact::find($id)
        ]);
    }
    public function updateEmployeeContact(Request $request){
        $this->emplyoeeContact=EmplyoeeContact::find($request->employee_id);
        $this->emplyoeeContact->employee_id=$request->employee_id;
        $this->emplyoeeContact->contact_name=$request->contact_name;
        $this->emplyoeeContact->contact_email=$request->contact_email;
        $this->emplyoeeContact->save();
        return redirect('/manage-employeeContact');
    }
    public function deleteEmployeeContact(Request $request){
        $this->emplyoeeContact=EmplyoeeContact::find($request->employee_id);
        $this->emplyoeeContact->delete();
        return back();
    }
}
