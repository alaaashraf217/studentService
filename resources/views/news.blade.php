@extends('layouts.app')
@section('content')
@section('page.title', 'news')


@endsection
<link rel="stylesheet" href="/front/css/news.css">


 <body>
 <div class="container-fluid mt-5 mb-5">
     <h1 class="display-3 text-dark text-center p-5" id="table_name">اخر الاخبار</h1>

         @foreach($posts as $post)

    <div class="row d-flex justify-content-center"  > 
        <div class="col-md-10" >
            <div class="row news-card p-3" >
                <div class="col-md-4">
                    <div class="feed-image"><img class="news-feed-image rounded " src="{{$post->image}}" width=200px  height=200px></div>
                </div>
                <div class="col-md-8">
                    <div >
                        <h1  class="news-feed-title text-right text-danger">{{$post->title}}</h1>
                        <div class="news-feed-text text-right">{{$post->body}}</div>
                        <div class=" mt-2">
                                <div class="d-flex flex-column ml-2">
                                <span class="date">{{$post->created_at}}</span>
                                </div>
</div>
</div>
                    </div>
                </div>
            </div>
        </div>


         @endforeach
     </div>
     <script></script>
 </body>