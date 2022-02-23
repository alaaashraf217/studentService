<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Table;
use App\Models\Official;
use App\Models\User;
use App\Models\Contact;
use App\Models\Exam;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Patient;
use App\Models\Lastexam;
use App\Models\Admin;
use Illuminate\Http\Request;


class WebController extends Controller
{
    public function office365(){
        return redirect("https://www.office.com/");
    }
    public function model(){
        return redirect('http://elc.eng.psu.edu.eg/');
    }
    public function result(){
        return redirect('http://psu.edu.eg/StudentResults/');
    }
    public function studentPlace(){
        return redirect('https://alzahraa.mans.edu.eg/studentApplications');


    }

 

public  function tableLec($year_id,$department_id,$faculty_id){
    $table=Table::where('year_id',$year_id)-> where('department_id',$department_id)->where('faculty_id',$faculty_id)->get();


    return view('table',compact('table'));


}
public function tableExam($year_id,$department_id,$faculty_id){
    $table=Exam::where('year_id',$year_id)-> where('department_id',$department_id)->where('faculty_id',$faculty_id)->get();



    return view('tableExam',compact('table'));


}
public function complain(){
    $admins=Admin::pluck('name', 'id');


return view('complain',compact('admins'));}


public function storeComplain(request  $request){

    Contact::create([
        'name'=>$request->name
        ,'email'=>$request->email
        ,'phone'=>$request->phone
        ,'message'=>$request->message
        ,'admin_id'=>$request->admin_id

    ]);
    return view('success');

}
public function clinic(){

return view('clinic');
}

public function storeClinic(request  $request){

    Patient::create([
        'name'=>$request->name
        ,'email'=>$request->email
        ,'phone'=>$request->phone
        ,'message'=>$request->message
        ,'department'=>$request->department
        ,'age'=>$request->age,
        'faculty'=>$request->faculty
    ]);
    return view('success');

}
public function news(){
    $posts=Post::with('photo')->get();
    return view('news',compact('posts'));
}

public function lastExam($year_id,$department_id,$faculty_id){
    $table=LastExam::where('year_id',$year_id)-> where('department_id',$department_id)->where('faculty_id',$faculty_id)->get();
    return redirect('files/'.$table[0]->file);


}
public function phoneDownload(){
    return view("phoneDownload");
}

}