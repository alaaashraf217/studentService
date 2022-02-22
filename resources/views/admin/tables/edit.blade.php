<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'تعديل الجدول')
<!-- Start Content Section -->
@section('content')
<!-- Start Card -->
  <div class="card main-card">
    <!-- Start Card Header -->
    <div class="card-header">
      <a href="{{ route('admin.tables.index') }}" class="button is-success">
        <span class="icon is-small">
          <i class="fa fa-newspaper"></i>
        </span>
        <span>قائمة الجداول</span>
      </a>
    </div><!-- End Card Header -->
    <!-- Start Form -->
    {!! Form::model($table,['method' => 'PATCH', 'files' => true, 'url' => route('admin.tables.update', $table->id)]) !!}
      @include('admin.tables._form')
    {!! Form::close() !!}<!-- End Form -->
  </div><!-- End Card -->
@endsection<!-- End Content Section -->
