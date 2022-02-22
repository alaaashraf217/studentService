<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'الامتحانات')
<!-- Start Content Section -->
@section('content')
  <!-- Start Card -->
  <div class="card main-card">
    <!-- Start Card Header -->
    <div class="card-header is-justify-content-space-between">
      <a href="{{ route('admin.lastexams.create') }}" class="button is-success">
        <span class="icon is-small">
          <i class="fa fa-plus-circle"></i>
        </span>
        <span>اضافة امتحان</span>
      </a>
        @include('admin.partials.search')
    </div><!-- End Card Header -->

    <!-- Start Card Content -->
    <div class="card-content">
      <div class="table-container">
        <table class="table is-fullwidth" id="posts">
          <thead>
          <tr>
            <th>السنة</th>
            <th> القسم</th>
            <th>ملف الامتحانات</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach($lastexams as $lastexam)

              <tr>
                <td>{{$lastexam->year_id}}</td>
                <td>{{$lastexam->department_id}}</td>
                <td>{{$lastexam->file}}</td>
                <td>
                  <div class="buttons has-addons">
                    <a class="button is-info" href="{{ route('admin.lastexams.edit', $lastexam->id) }}"> تعديل </a>
                    <span class="modal-open button is-danger" status-name="تأكيد الحذف"  traget-modal=".delete-modal" data_id="{{ $lastexam->id }}" data_name="{{ $lastexam->title }}" data-url="{{ route('admin.lastexams.destroy', $lastexam->id) }}">حذف</span>
                  </div>
                </td>
              </tr>


            @endforeach
          </tbody>
        </table>
      </div>
    </div><!-- End Card Content -->

    <!-- Start Card Footer -->
    {{-- <div class="card-footer with-pagination">
      {{ $posts->links('vendor.pagination.bulma') }}
    </div><!-- End Card Content -->
  </div><!-- End Card --> --}}

  <!-- Include Modals -->
  @include('admin.partials.deleteModal')
@endsection<!-- End Content Section -->


