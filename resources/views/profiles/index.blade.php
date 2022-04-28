@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex mx-auto">
        <div class="col-4 p-5">
            <img src="https://i.pinimg.com/originals/62/9f/21/629f2154a091599beadf9c91ea657a70.jpg" style="height: 150px; width: 151px" class="rounded-circle" alt="post">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
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
        @foreach($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100" alt="{{ $post->caption }}">
            </div>
        @endforeach
    </div>
</div>
@endsection
