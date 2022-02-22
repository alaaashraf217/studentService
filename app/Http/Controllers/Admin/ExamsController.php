<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Exam;
use App\Models\Service;
use App\Models\Year;
use App\Models\Department;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    //

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $exams = Exam::with('photo')->paginate(20);

        return view('admin.exams.index', compact('exams'));
    }
     //
     public function create(){

        $years = Year::pluck('name', 'id');
        $sections = Service::pluck('name', 'id');
        $departments = Department::pluck('name', 'id');
        return view('admin.exams.create', compact('departments','sections','years'));
    }
       /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        return view('admin.exams.show', compact('exam'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return \Illuminate\Http\Response
     */
   public function store(PostRequest $request)
   {
      $exam=Exam::create([
          'title' => $request->title,
          'year_id'=>$request->year_id,
          'department_id'=>$request->department_id,
          'service_id'=>$request->service_id]);
          if ($request->hasFile('image')) {
            $exam->storeImage($request->file('image')->store('tables', 'public'));
          };

            return redirect()->route('admin.exams.index')->with('success', 'تم اضافة الجدول');
    }
         /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        $years = Year::pluck('name', 'id');
        $departments = Department::pluck('name', 'id');
        $sections = Service::pluck('name', 'id');

        return view('admin.exams.edit', compact('exam','departments','sections','years'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param \App\Models\Exam $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Exam $exam)
    {
        $exam->update($request->input());
        if ($request->hasFile('image')) {
            $exam->updateImage($request->file('image')->store('tables', 'public'));
        }

        return redirect()->route('admin.exams.index')->with('success', 'تم تعديل الجدول');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Table  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();

        return redirect()->route('admin.exams.index')->with('success', 'تم حذف الجدول');
    }
}
