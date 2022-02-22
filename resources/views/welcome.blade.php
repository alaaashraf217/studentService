@section('page.title', 'studentService')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous">
<style>
body {
        /* background: #333; */
        color: white;
        font-family: Poppins-Regular;
    }

    .navbar {
        border-bottom: black 3px solid;
        opacity: 0.8;
    }

    @font-face {
  font-family: Poppins-Regular;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
}





    #home-section .dark-overlay
     {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }
    .my-card
    {
        position:absolute;
        left:40%;
        top:-20px;
        border-radius:50%;
    }  
 
    .listItem{
        list-style: none;
        text-align: right;
    }
    .dropbtn {
        background-color: #ffffff;
        color: rgb(150, 6, 6);
        padding: 10px;
        padding-bottom: 14px;
        font-size: 26px;
        border: none;
        cursor: pointer;
    }


    .dropdown {
        position:relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        padding-top: -20px;
        position: absolute;
        background-color: #ffffff;
        min-width: 160px;
        /*overflow: auto;*/
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }


    .show {display: block;}
</style>  <title>student_service</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
<div class="container">
    <a href="#" class="navbar-brand">خدمة الطلاب</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#home" class="nav-link pr-5">الصفحة الرئيسية</a>
            </li>
           
            <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                           
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>

        </ul>
    </div>
</div>
</nav>


<header id="home-section">
<div class="dark-overlay">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
             <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
             <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-caption d-none d-md-block pb-5">
                <h1 class="display-4 pb-4 ">البوابة الالكترونية لخدمة طلاب هندسة بورسعيد</h1>
                <p style="font-size: 18px;">تقدم كليه هندسة بورسعيد بوابة إلكترونية للخدمات الطلابية والتي تم إطلاقها بالتزامن مع التحول الرقمي في الخدمات التعليمية حيث توفر خدمات تعليمية لجميع الطلاب وتتيح التواصل بين الهيئات التعليمية بالجامعة والطلاب </p>
            </div>

            <div class="carousel-item active">
                <img class="d-block w-100 bg-dark" src="{{asset('images/faculty7.jpeg')}}" alt="First slide" height="900px" style="opacity: .9;" >
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/faculty6.png" alt="Second slide" height="900px" style="opacity: .9;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 bg-dark" src="{{asset('images/bg-0.jpg')}}" alt="forth slide" height="900px" style="opacity: .9;" >
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 bg-dark" src="{{asset('images/fac1.jpeg')}}" alt="third slide" height="900px" style="opacity: .9;" >
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 bg-dark" src="{{asset('images/fac2.jpeg')}}" alt="forth slide" height="900px" style="opacity: .9;" >
           
        </div>
       
</div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
</div>
</div>
</div>
</div>
</header>
<!-- cards -->

<div class="container "style="padding-top: 950px;">
<h1 style="color:rgb(201, 66, 66); text-align: center;"  class="pt-4"> الخدمات المتاحة</h1>
<div class="row w-100 pt-4">
    <a class="text-danger text-center mt-5 card-move " href="{{route('result')}}">
        <div class="col-md-4 pb-5">
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-file" aria-hidden="true"></span></div>
                <h3 class="mb-5">نتائج الامتحانات</h3></a>

</div>
</div>

@guest
<a class="text-danger text-center mt-5 " href="{{route('login')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-table" aria-hidden="true"></span></div>
        <h3 class="mb-5">الجداول الدراسية</h3></a>

</div>
</div>

                    @else
                    <a class="text-danger text-center mt-5 " href="{{route('tableLec', ['year_id'=>Auth::user()->year_id,'department_id'=>Auth::user()->department_id,'faculty_id'=>Auth::user()->faculty_id])}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-table" aria-hidden="true"></span></div>
        <h3 class="mb-5">الجداول الدراسية</h3></a>

</div>
</div>
                    @endguest
@guest
<a class="text-danger text-center mt-5 " href="{{route('login')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-table" aria-hidden="true"></span></div>
        <h3 class="mb-5">جداول الامتحانات</h3></a>

</div>
</div>

                    @else
<a class="text-danger text-center mt-5 " href="{{route('tableExam', ['year_id'=>Auth::user()->year_id,'department_id'=>Auth::user()->department_id,'faculty_id'=>Auth::user()->faculty_id])}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-table" aria-hidden="true"></span></div>
        <h3 class="mb-5">جداول الامتحانات</h3></a>

</div>
</div>
                    @endguest

<a class="text-danger text-center mt-5 " href="{{route('model')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span  class="fas fa-chalkboard" aria-hidden="true"></span></div>
        <h3 class="mb-5">المنصة التعليمية</h3></a>

</div>
</div>
<a class="text-danger text-center mt-5 " href="#">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-paste" aria-hidden="true"></span></div>
        <h3 class="mb-5">الاستبيانات</h3></a>

</div>
</div>
<a class="text-danger text-center mt-5 " href="{{route('office')}}" >
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fab fa-microsoft" aria-hidden="true"></span></div>
        <h3 class="mb-5">office 365</h3></a>

</div>
</div>
<a class="text-danger text-center mt-5 " href="{{route('complain')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-times" aria-hidden="true"></span></div>
        <h3 class="mb-5"> الشكاوي</h3></a>

</div>
</div>
<!--  -->
<a class="text-danger text-center mt-5 " href="{{route('studentPlace')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="far fa-building" aria-hidden="true"></span></div>
        <h3 class="mb-5"> المدينة الجامعية</h3></a>

</div>
</div>

@guest
<a class="text-danger text-center mt-5 " href="{{route('login')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-table" aria-hidden="true"></span></div>
        <h3 class="mb-5">الامتحانات السابقة</h3></a>

</div>
</div>
@else
 <a class="text-danger text-center mt-5 " href="{{route('lastExam', ['year_id'=>Auth::user()->year_id,'department_id'=>Auth::user()->department_id,'faculty_id'=>Auth::user()->faculty_id])}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-book-open" aria-hidden="true"></span></div>
        <h3 class="mb-5"> امتحانات سابقة</h3></a>

</div>
</div>
@endguest

<a class="text-danger text-center mt-5 " href="{{route('phoneDownload')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-mobile" aria-hidden="true"></span></div>
        <h3 class="mb-5">تحميل التطبيق بالهاتف المحمول</h3></a>
</a>

</div>


</div> <a class="text-danger text-center mt-5 " href="{{route('news')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-info" aria-hidden="true"></span></div>
        <h3 class="mb-5"> اخر الاخبار</h3></a>

</div>
</div>
<a class="text-danger text-center mt-5"  href="{{route('clinic')}}">
<div class="col-md-4 pb-5">
    <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-hospital" aria-hidden="true"></span></div>
        <h3 class="mb-5"> العيادة الطبية</h3></a>

</div>
</div>
</div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script>
<div class="jumbotron jumbotron-fluid bg-dark " style="margin-bottom: -2rem;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6"><a href="https://goo.gl/maps/q6osdJtaR7n"> <img src="images/map.png"  class="rounded"height="250px" alt=""></a></div>
            <div class="col-sm-6 pt-5">
                <ul >
                    <li class="listItem  "><a  class="text-white "href="http://eng.psu.edu.eg/images/stories/new_images/2018/5/%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%85%D8%A7%D8%AA_%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9_%D9%88%D8%A7%D9%84%D8%A5%D8%B1%D8%B4%D8%A7%D8%AF%D8%A7%D8%AA_%D8%A7%D9%84%D9%82%D8%A7%D9%86%D9%88%D9%86%D9%8A%D8%A9_%D9%84%D8%A3%D8%B9%D9%85%D8%A7%D9%84_%D8%A7%D9%84%D8%A5%D9%85%D8%AA%D8%AD%D8%A7%D9%86%D8%A7%D8%AA.pdf">حقوق وإلتزامات الطلاب <i class="fas fa-angle-left"></i></a></li>
                    <li class="listItem">
                        <a class="text-white" href="https://drive.google.com/file/d/1dWct_LzoHiQ24b9WtkmrkFPfwUwyRSeN/view"> دليل الطالب <i class="fas fa-angle-left"></i></a> </li>
                    <li class="listItem"><a class="text-white" href="https://drive.google.com/file/d/1Fbp3N6eAx199ScZOmVxmV-hglosstNgs/view"> دليل نظام الامتحانات واعمال الكنترول <i class="fas fa-angle-left"></i></a></li>
                    <li class="listItem"><a  class="text-white" href="https://drive.google.com/file/d/1Fbp3N6eAx199ScZOmVxmV-hglosstNgs/view"> دليل نظام الامتحانات واعمال الكنترول<i class="fas fa-angle-left"></i></a></li>
                    <li class="listItem"><a  class="text-white" href="https://drive.google.com/file/d/1zwoef-kS5ebZnB_ypv_BRta28PbJsZhj/view"> دليل التدريب الميداني <i class="fas fa-angle-left"></i></a></li>
                    <li class="listItem"><a  class="text-white" href="https://drive.google.com/file/d/19QTi3fbNpmT8Y3f6QYk8sOtAB9EsaXtW/view"> الخطة الاستراتيجية للكلية <i class="fas fa-angle-left"></i></a></li>
                    <li class="listItem"><a  class="text-white" href="https://drive.google.com/file/d/1p9KFGQgGDvvh7GmTjZF2R9PcJmR2CzFC/view"> دليل الابنيه والمنشئات <i class="fas fa-angle-left"></i></a></li>





                </ul>
            </div>

        </div>
    </div>
</div>
<div class="bg-dark text-center p-3 ">@coptright 2021</div> 

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
