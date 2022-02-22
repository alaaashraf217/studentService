@extends('admin.layouts.app')

@section('page.title', 'اضافه صور للجدول'.' : '.$exam->title)

@section('content')
    <div class="card">
        <section class="section main-block">
            <h1 class="title"><a href="{{ route('admin.exams.index') }}" class="button">
                    <span class="icon is-small"><i class="fa fa-newspaper"></i></span>
                    <span>قائمة الجداول</span>
                </a></h1>
            <dropzone
                url="{{ route('admin.store_photo', $exam->id) }}"
                redirect-link="{{ route('admin.exams.show', $exam->id) }}"
                delete-url="#"
            ></dropzone>
            <div class="columns is-multiline m-t-30">
                @foreach($exam->images as $image)
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="{{ asset('storage/' . $image->path) }}" alt="Placeholder image">
                                </figure>
                            </div>
                            <footer class="card-footer">
                                <span class="modal-open card-footer-item has-text-danger has-text-weight-bold" traget-modal=".delete-modal" data_id="{{ $image->id }}" data_name="الصورة" data-url="{{ route('admin.destroy_photo', $image->id) }}">حذف</span>
                            </footer>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    @include('admin.partials.deleteModal')
@endsection
