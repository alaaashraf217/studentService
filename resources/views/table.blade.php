@extends('layouts.app')
@section('content')
@section('page.title','lectureTable')


@endsection


@if(isset($table)&& $table->count()>0)
<h1 class=" display-3 text-dark text-center  " style="padding:100px" >{{$table[0]->title}}</h1>
<div class="container">
<img src="{{$table[0]->image}}" width=100% style="height:500px;   border-radius: 8px;
">
</div>
@else 

<section class="py-32 error-404-page">
    <img class="object-contain w-full h-96" src="/admin/img/illustrations/404.svg"> 
    <h1 class="mt-10 text-3xl font-semibold text-center ">عذراً لا يمكن العثور على هذه الصفحة</h1>
</section>
@endif 