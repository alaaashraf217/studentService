<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Lastexam;
use App\Models\Service;
use App\Models\Year;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\PostRequest;


class LastexamsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lastexams = Lastexam::get();
        return view('admin.lastexams.index', compact('lastexams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $years = Year::pluck('name', 'id');
        $sections = Service::pluck('name', 'id');
        $departments = Department::pluck('name', 'id');

        return view('admin.lastexams.create', compact('departments','sections','years'));
    }


    public function store(request $request)
    {   
        $name=$request->file->getClientOriginalName();
        $request->file->move('files',$name);
    
        $lastexam=Lastexam::create([
            'title' => $request->title,
            'year_id'=>$request->year_id,
            'department_id'=>$request->department_id,
            'service_id'=>$request->service_id,
            'file'=>$name]);


        return redirect()->route('admin.lastexams.index')->with('success', 'تم اضافة الامتحان');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lastexam  $lastexam
     * @return \Illuminate\Http\Response
     */
    public function edit(Lastexam $lastexam)
    {
        $years = Year::pluck('name', 'id');
        $departments = Department::pluck('name', 'id');
        $sections = Service::pluck('name', 'id');

        return view('admin.lastexams.edit', compact('lastexam','departments','sections','years'));
    }

   /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param \App\Models\Lastexam $post
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, Lastexam $lastexam)
    {
        $lastexam->update($request->input());


        return redirect()->route('admin.lastexams.index')->with('success', 'تم تعديل الامتحان');
    }
   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lastexam  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lastexam $lastexam)
    {
        $lastexam->delete();

        return redirect()->route('admin.lastexams.index')->with('success', 'تم حذف الامتحان');
    }
}

