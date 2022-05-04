@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image  }}" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="profile" class="rounded-circle w-100" style="max-width:  40px">
                    </div>
                    <div>
                        <div class="fw-bold">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <a href="#" class="text-decoration-none ps-3">Follow</a>
                        </div>
                    </div>

                </div>

                <hr>

                <p><span class="fw-bold">
                        <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
@endsection
