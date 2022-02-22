<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'تعديل الامتحان')
<!-- Start Content Section -->
@section('content')
<!-- Start Card -->
  <div class="card main-card">
    <!-- Start Card Header -->
    <div class="card-header">
      <a href="{{ route('admin.lastexams.index') }}" class="button is-success">
        <span class="icon is-small">
          <i class="fa fa-newspaper"></i>
        </span>
        <span>قائمة الامتحانات</span>
      </a>
    </div><!-- End Card Header -->
    <!-- Start Form -->
    {!! Form::model($lastexam,['method' => 'PATCH', 'files' => true, 'url' => route('admin.lastexams.update', $lastexam->id)]) !!}
      @include('admin.lastexams._form')
    {!! Form::close() !!}<!-- End Form -->
  </div><!-- End Card -->
@endsection<!-- End Content Section -->
