@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex mx-auto">
        <div class="col-4 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt="post">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <button class="btn btn-primary ms-4">Follow</button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create" class="text-decoration-none">Add new post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="text-decoration-none">Edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> Publicações</div>
                <div class="pe-5"><strong>273</strong> Seguidores</div>
                <div class="pe-5"><strong>502</strong> Seguindo</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><strong><a href="#" class="text-decoration-none">{{ $user->profile->url }}</a></strong></div>
        </div>
    </div>

    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" alt="{{ $post->caption }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
