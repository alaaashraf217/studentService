<!-- Layout Extend -->
@extends('admin.layouts.app')
<!-- SEO Section -->
@section('page.title', 'الجداول')
<!-- Start Content Section -->
@section('content')
  <!-- Start Card -->
  <div class="card main-card">
    <!-- Start Card Header -->
    <div class="card-header is-justify-content-space-between">
      <a href="{{ route('admin.tables.create') }}" class="button is-success">
        <span class="icon is-small">
          <i class="fa fa-plus-circle"></i>
        </span>
        <span>اضافة جدول</span>
      </a>
        @include('admin.partials.search')
    </div><!-- End Card Header -->

    <!-- Start Card Content -->
    <div class="card-content">
      <div class="table-container">
        <table class="table is-fullwidth" id="posts">
          <thead>
          <tr>
            <th>صورة الجدول</th>
            <th>عنوان الجدول</th>
            <th>الاجراءات</th>
          </tr>
          </thead>
          <tbody>
            @foreach($tables as $table)
              <tr>
                <td><img src="{{ $table->image }}"></td>
                <td>{{ $table->title }}</td>
                <td>
                  <div class="buttons has-addons">
                    <a class="button is-info" href="{{ route('admin.tables.edit', $table->id) }}"> تعديل </a>
                      <a class="button is-warning" href="{{ route('admin.tables.show', $table->id) }}">معرض الصور</a>
                    <span class="modal-open button is-danger" status-name="تأكيد الحذف"  traget-modal=".delete-modal" data_id="{{ $table->id }}" data_name="{{ $table->title }}" data-url="{{ route('admin.tables.destroy', $table->id) }}">حذف</span>
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


