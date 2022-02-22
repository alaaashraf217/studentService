<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\Admin\SliderRequest;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Department;
use App\Models\Table;
use App\Models\Year;
use App\Models\Service;
use Illuminate\Http\Request;



class TablesController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tables = Table::with('photo')->paginate(20);

        return view('admin.tables.index', compact('tables'));
    }

    //
    public function create(){
        $years = Year::pluck('name', 'id');
        $sections = Service::pluck('name', 'id');
        $departments = Department::pluck('name', 'id');

        return view('admin.tables.create', compact('departments','sections','years'));
    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Table  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        return view('admin.tables.show', compact('table'));
    }

/**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return \Illuminate\Http\Response
     */
   public function store(PostRequest $request)
   {
      $table=Table::create([
          'title' => $request->title,
          'year_id'=>$request->year_id,
          'department_id'=>$request->department_id,
          'service_id'=>$request->service_id]);
          if ($request->hasFile('image')) {
            $table->storeImage($request->file('image')->store('tables', 'public'));
          };

            return redirect()->route('admin.tables.index')->with('success', 'تم اضافة الجدول');
    }

       /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        $years = Year::pluck('name', 'id');
        $departments = Department::pluck('name', 'id');
        $sections = Service::pluck('name', 'id');

        return view('admin.tables.edit', compact('table', 'departments','sections','years'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param \App\Models\Table $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Table $table)
    {
        $table->update($request->input());
        if ($request->hasFile('image')) {
            $table->updateImage($request->file('image')->store('tables', 'public'));
        }

        return redirect()->route('admin.tables.index')->with('success', 'تم تعديل الجدول');
    }
   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Table  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        $table->delete();

        return redirect()->route('admin.tables.index')->with('success', 'تم حذف الجدول');
    }
}




