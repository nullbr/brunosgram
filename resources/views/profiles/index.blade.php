@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex mx-auto">
        <div class="col-4 p-5">
            <img src="https://i.pinimg.com/originals/62/9f/21/629f2154a091599beadf9c91ea657a70.jpg" style="height: 150px; width: 151px" class="rounded-circle">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>21</strong> Publicações</div>
                <div class="pe-5"><strong>273</strong> Seguidores</div>
                <div class="pe-5"><strong>502</strong> Seguindo</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><strong><a href="#">{{ $user->profile->url }}</a></strong></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://res.cloudinary.com/grand-canyon-university/image/fetch/w_750,h_564,c_fill,g_faces,q_auto/https://www.gcu.edu/sites/default/files/2020-09/programming.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.pcworld.com/wp-content/uploads/2021/09/sale_22062_article_image-100893967-orig.jpg?quality=50&strip=all&w=1024" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh1Tvb7tXgw9bjWbMMReStqZ46nuvd8ET3YAKd3CQmm7FFc8o6OIopsDuQC_5G_zGAJ54&usqp=CAU" class="w-100">
        </div>
    </div>
</div>
@endsection
